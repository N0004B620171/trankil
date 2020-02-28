<?php

namespace App\Controller;

use App\Entity\Reamenagement;
use App\Form\ReamenagementType;
use App\Repository\ReamenagementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reamenagement")
 */
class ReamenagementController extends AbstractController
{
    /**
     * @Route("/", name="reamenagement_index", methods={"GET"})
     */
    public function index(ReamenagementRepository $reamenagementRepository): Response
    {
        return $this->render('reamenagement/index.html.twig', [
            'reamenagements' => $reamenagementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reamenagement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reamenagement = new Reamenagement();
        $form = $this->createForm(ReamenagementType::class, $reamenagement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reamenagement);
            $entityManager->flush();

            return $this->redirectToRoute('reamenagement_index');
        }

        return $this->render('reamenagement/new.html.twig', [
            'reamenagement' => $reamenagement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reamenagement_show", methods={"GET"})
     */
    public function show(Reamenagement $reamenagement): Response
    {
        return $this->render('reamenagement/show.html.twig', [
            'reamenagement' => $reamenagement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reamenagement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reamenagement $reamenagement): Response
    {
        $form = $this->createForm(ReamenagementType::class, $reamenagement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reamenagement_index');
        }

        return $this->render('reamenagement/edit.html.twig', [
            'reamenagement' => $reamenagement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reamenagement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reamenagement $reamenagement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reamenagement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reamenagement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reamenagement_index');
    }
}
