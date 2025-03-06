<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Rediriger l'utilisateur s'il est déjà connecté
        if ($this->getUser()) {
            if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
                return $this->redirectToRoute('admin_instructeurs'); // 🔹 Admin → Gestion des instructeurs
            }
            if (in_array('ROLE_INSTRUCTEUR', $this->getUser()->getRoles())) {
                return $this->redirectToRoute('app_atelier_index'); // 🔹 Instructeur → Gestion des ateliers
            }
            if (in_array('ROLE_APPRENTI', $this->getUser()->getRoles())) {
                return $this->redirectToRoute('app_atelier_index'); // 🔹 Apprenti → Gestion des ateliers

                //return $this->redirectToRoute('mes_inscriptions'); // 🔹 Apprenti → Voir ses inscriptions
            }
        }

        // Récupérer l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        // Message d'erreur affiché seulement si une erreur est détectée
        if ($error) {
            $this->addFlash('error', 'Identifiants incorrects. Veuillez réessayer.');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Ajouter un message flash après la déconnexion
        $this->addFlash('success', 'Vous avez été déconnecté avec succès.');

        throw new \LogicException('Cette méthode sera interceptée par le firewall pour gérer la déconnexion.');
    }
}
