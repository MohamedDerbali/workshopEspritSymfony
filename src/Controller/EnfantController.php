<?php

namespace App\Controller;

use App\Entity\Enfant;
use App\Form\EnfantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/enfant")
 */
class EnfantController extends AbstractController
{
    /**
     * @Route("/", name="app_enfant_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $enfants = $entityManager
            ->getRepository(Enfant::class)
            ->findAll();

        return $this->render('enfant/index.html.twig', [
            'enfants' => $enfants,
        ]);
    }

    /**
     * @Route("/new", name="app_enfant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $enfant = new Enfant();
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($enfant);
            $entityManager->flush();

            return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('enfant/new.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEnfant}", name="app_enfant_show", methods={"GET"})
     */
    public function show(Enfant $enfant): Response
    {
        return $this->render('enfant/show.html.twig', [
            'enfant' => $enfant,
        ]);
    }

    /**
     * @Route("/{idEnfant}/edit", name="app_enfant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Enfant $enfant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('enfant/edit.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEnfant}", name="app_enfant_delete", methods={"POST"})
     */
    public function delete(Request $request, Enfant $enfant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enfant->getIdEnfant(), $request->request->get('_token'))) {
            $entityManager->remove($enfant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
    }
}
