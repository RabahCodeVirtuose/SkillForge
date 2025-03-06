<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Atelier; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/instructeurs', name: 'admin_instructeurs')]
    public function listInstructors(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $instructeurs = $entityManager->getRepository(User::class)->findUsersByRole('ROLE_INSTRUCTEUR');

        return $this->render('admin/instructeurs.html.twig', [
            'instructeurs' => $instructeurs,
        ]);
    }

    #[Route('/promouvoir/{id}', name: 'admin_promote')]
    public function promoteInstructor(User $user, EntityManagerInterface $entityManager): RedirectResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('admin_instructeurs');
        }

        if ($user->isAdmin()) {
            $this->addFlash('warning', 'Cet utilisateur est déjà administrateur.');
        } else {
            $user->promoteToAdmin();
            $entityManager->flush();
            $this->addFlash('success', 'L\'instructeur a été promu en administrateur.');
        }

        return $this->redirectToRoute('admin_instructeurs');
    }

    #[Route('/supprimer/{id}', name: 'admin_delete')]
    public function deleteInstructor(User $user, EntityManagerInterface $entityManager): RedirectResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('admin_instructeurs');
        }

        if ($user->isAdmin()) {
            $this->addFlash('error', 'Impossible de supprimer un administrateur.');
        } else {
            // 🔥 Supprimer tous les ateliers de l'instructeur avant de le supprimer
            $ateliers = $entityManager->getRepository(Atelier::class)->findBy(['instructeur' => $user]);
            foreach ($ateliers as $atelier) {
                $entityManager->remove($atelier);
            }

            // 🔥 Ensuite, supprimer l'instructeur
            $entityManager->remove($user);
            $entityManager->flush();

            $this->addFlash('success', 'L\'instructeur et ses ateliers ont été supprimés avec succès.');
        }

        return $this->redirectToRoute('admin_instructeurs');
    }


    #[Route('/retrograder/{id}', name: 'admin_downgrade')]
    public function downgradeAdmin(User $user, EntityManagerInterface $entityManager): RedirectResponse
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('admin_instructeurs');
        }

        // Empêcher un administrateur de se rétrograder lui-même
        if ($user === $this->getUser()) {
            $this->addFlash('error', 'Vous ne pouvez pas vous rétrograder vous-même.');
            return $this->redirectToRoute('admin_instructeurs');
        }

        if (!$user->isAdmin()) {
            $this->addFlash('warning', 'Cet utilisateur n\'est pas administrateur.');
        } else {
            // Vérifier qu'il reste au moins un autre administrateur
            $admins = $entityManager->getRepository(User::class)->findUsersByRole('ROLE_ADMIN');

            if (count($admins) <= 1) {
                $this->addFlash('error', 'Impossible de retirer le rôle d\'administrateur car il doit y avoir au moins un administrateur.');
            } else {
                $roles = array_filter($user->getRoles(), fn($role) => $role !== 'ROLE_ADMIN');
                $user->setRoles($roles);
                $entityManager->flush();

                $this->addFlash('success', 'L\'utilisateur a été rétrogradé en instructeur.');
            }
        }

        return $this->redirectToRoute('admin_instructeurs');
    }
}
