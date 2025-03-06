<?php

namespace App\Controller;

use App\Entity\Atelier;
use App\Entity\User;
use App\Form\AtelierType;
use App\Repository\AtelierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\Note;
use App\Form\NoteType;
use App\Repository\NoteRepository;

#[Route('/atelier')]
final class AtelierController extends AbstractController
{
    #[Route(name: 'app_atelier_index', methods: ['GET'])]
    public function index(AtelierRepository $atelierRepository): Response
    {
        return $this->render('atelier/index.html.twig', [
            'ateliers' => $atelierRepository->findAll(),
        ]);
    }

    #[Route('/mesinscriptions', name: 'mes_inscriptions', methods: ['GET'])]
    public function mesInscriptions(): Response
    {
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_APPRENTI', $user->getRoles())) {
            $this->addFlash('error', 'Seuls les apprentis peuvent accéder à cette page.');
            return $this->redirectToRoute('app_atelier_index');
        }

        return $this->render('atelier/mes_inscriptions.html.twig', [
            'ateliers' => $user->getAteliers(),
        ]);
    }

    #[Route('/new', name: 'app_atelier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_INSTRUCTEUR');

        $atelier = new Atelier();
        $atelier->setInstructeur($this->getUser());
        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($atelier);
            $entityManager->flush();
            return $this->redirectToRoute('app_atelier_index');
        }

        return $this->render('atelier/new.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_atelier_show', methods: ['GET'])]
    public function show(Atelier $atelier, NoteRepository $noteRepository): Response
    {
        if (!$atelier) {
            $this->addFlash('error', 'Cet atelier n\'existe pas.');
            return $this->redirectToRoute('app_atelier_index');
        }

        // Récupération des notes pour Chart.js
        $notesCount = array_fill(0, 6, 0); // Initialiser un tableau pour compter les notes de 0 à 5

        foreach ($atelier->getNotes() as $note) {
            $notesCount[(int) $note->getNote()]++; // Compter le nombre de votes pour chaque note
        }

        return $this->render('atelier/show.html.twig', [
            'atelier' => $atelier,
            'description' => (new \cebe\markdown\Markdown())->parse($atelier->getDescription()),
            'moyenne_notes' => $atelier->getMoyenneNotes(),
            'notes_data' => $notesCount, // Envoi des données des notes à Twig
        ]);
    }

    #[Route('/{id}/edit', name: 'app_atelier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() !== $atelier->getInstructeur()) {
            $this->addFlash('error', 'Vous ne pouvez modifier que vos propres ateliers.');
            return $this->redirectToRoute('app_atelier_index');
        }

        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_atelier_index');
        }

        return $this->render('atelier/edit.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_atelier_delete', methods: ['POST'])]
    public function delete(Request $request, Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() !== $atelier->getInstructeur()) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres ateliers.');
            return $this->redirectToRoute('app_atelier_index');
        }

        if ($this->isCsrfTokenValid('delete' . $atelier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($atelier);
            $entityManager->flush();
            $this->addFlash('success', 'Atelier supprimé avec succès.');
        }

        return $this->redirectToRoute('app_atelier_index');
    }

    #[Route('/{id}/inscription', name: 'app_atelier_inscription', methods: ['POST'])]
    public function inscription(Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_APPRENTI', $user->getRoles())) {
            $this->addFlash('error', 'Seuls les apprentis peuvent s\'inscrire aux ateliers.');
            return $this->redirectToRoute('app_atelier_index');
        }

        if (!$atelier->getInscrits()->contains($user)) {
            $atelier->ajouterInscrit($user);
            $entityManager->flush();
            $this->addFlash('success', 'Vous êtes inscrit à cet atelier.');
        } else {
            $this->addFlash('warning', 'Vous êtes déjà inscrit à cet atelier.');
        }

        return $this->redirectToRoute('app_atelier_show', ['id' => $atelier->getId()]);
    }

    #[Route('/{id}/desinscription', name: 'app_atelier_desinscription', methods: ['POST'])]
    public function desinscription(Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_APPRENTI', $user->getRoles())) {
            $this->addFlash('error', 'Seuls les apprentis peuvent se désinscrire des ateliers.');
            return $this->redirectToRoute('app_atelier_index');
        }

        if ($atelier->getInscrits()->contains($user)) {
            $atelier->retirerInscrit($user);
            $entityManager->flush();
            $this->addFlash('success', 'Vous vous êtes désinscrit de cet atelier.');
        } else {
            $this->addFlash('warning', 'Vous n\'êtes pas inscrit à cet atelier.');
        }

        return $this->redirectToRoute('app_atelier_show', ['id' => $atelier->getId()]);
    }
    #[Route('/{id}/noter', name: 'app_atelier_noter', methods: ['GET', 'POST'])]
    public function noter(Request $request, Atelier $atelier, EntityManagerInterface $entityManager, NoteRepository $noteRepository): Response
    {
        $user = $this->getUser();

        // Vérifier si l'utilisateur est bien un apprenti
        if (!$user || !in_array('ROLE_APPRENTI', $user->getRoles())) {
            $this->addFlash('error', 'Seuls les apprentis peuvent noter un atelier.');
            return $this->redirectToRoute('app_atelier_show', ['id' => $atelier->getId()]);
        }

        // 🚨 Vérifier si l'apprenti est bien inscrit à l'atelier
        if (!$atelier->getInscrits()->contains($user)) {
            $this->addFlash('error', 'Vous devez être inscrit à cet atelier pour pouvoir le noter.');
            return $this->redirectToRoute('app_atelier_show', ['id' => $atelier->getId()]);
        }

        // Vérifier si l'apprenti a déjà noté cet atelier
        $noteExistante = $noteRepository->findOneBy([
            'apprenti' => $user,
            'atelier' => $atelier,
        ]);

        if (!$noteExistante) {
            $note = new Note();
            $note->setApprenti($user);
            $note->setAtelier($atelier);
        } else {
            $note = $noteExistante; // Modifier la note existante
        }

        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($note);
            $entityManager->flush();
            $this->addFlash('success', 'Votre note a été enregistrée.');
            return $this->redirectToRoute('app_atelier_show', ['id' => $atelier->getId()]);
        }

        return $this->render('atelier/noter.html.twig', [
            'atelier' => $atelier,
            'form' => $form->createView(),
        ]);
    }


}
