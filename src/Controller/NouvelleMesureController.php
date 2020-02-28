<?php

namespace App\Controller;

use App\Entity\NouvelleMesure;
use App\Form\NouvelleMesureType;
use App\Repository\NouvelleMesureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BudgetRepository;


/**
 * @Route("/nouvelle/mesure")
 */
class NouvelleMesureController extends AbstractController
{
    /**
     * @Route("/", name="nouvelle_mesure_index", methods={"GET"})
     */
    public function index(NouvelleMesureRepository $nouvelleMesureRepository): Response
    {
        return $this->render('nouvelle_mesure/index.html.twig', [
            'nouvelle_mesures' => $nouvelleMesureRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="nouvelle_mesure_new", methods={"GET","POST"})
     */
    public function new(Request $request, BudgetRepository $budgetRepositoty): Response
    {
       /* if($request->request->count() > 0)
        {
            $nouvelleMesure = new NouvelleMesure();
            $nouvelleMesure->setMontant($request->request->get('montant'))
            ->setDate(new \DateTime())
            ->setBudget($budgetRepositoty ->findOneByNumero($request->request->get('budgetNumero')))
            ;

            $nouvelleMesure->getBudget()->setMontant();
            dump($nouvelleMesure->getBudget()->getMontant());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($nouvelleMesure);
            $entityManager->flush();
            return $this->redirectToRoute('nouvelle_mesure_index');

          }*/
        $nouvelleMesure = new NouvelleMesure();
        $form = $this->createForm(NouvelleMesureType::class, $nouvelleMesure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nouvelleMesure->getBudget()->setMontant($nouvelleMesure->getBudget()->getMontant()+$nouvelleMesure->getMontant());
            //dump(            $nouvelleMesure->getBudget()->setMontant($nouvelleMesure->getBudget()->getMontant()+$nouvelleMesure->getMontant()));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($nouvelleMesure);
            $entityManager->flush();

            return $this->redirectToRoute('nouvelle_mesure_index');
        }

        return $this->render('nouvelle_mesure/new.html.twig', [
            'nouvelle_mesure' => $nouvelleMesure,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="nouvelle_mesure_show", methods={"GET"})
     */
    public function show(NouvelleMesure $nouvelleMesure): Response
    {
        return $this->render('nouvelle_mesure/show.html.twig', [
            'nouvelle_mesure' => $nouvelleMesure,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="nouvelle_mesure_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, NouvelleMesure $nouvelleMesure): Response
    {
        $ancienMontantNouvellemesure=$nouvelleMesure->getMontant();
        $form = $this->createForm(NouvelleMesureType::class, $nouvelleMesure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nouvelleMesure->getBudget()->setMontant($nouvelleMesure->getBudget()->getMontant()-$ancienMontantNouvellemesure+$nouvelleMesure->getMontant());

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nouvelle_mesure_index');
        }

        return $this->render('nouvelle_mesure/edit.html.twig', [
            'nouvelle_mesure' => $nouvelleMesure,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="nouvelle_mesure_delete", methods={"DELETE"})
     */
    public function delete(Request $request, NouvelleMesure $nouvelleMesure): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nouvelleMesure->getId(), $request->request->get('_token'))) {
            $nouvelleMesure->getBudget()->setMontant($nouvelleMesure->getBudget()->getMontant()-$nouvelleMesure->getMontant());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($nouvelleMesure);
            $entityManager->flush();
        }

        return $this->redirectToRoute('nouvelle_mesure_index');
    }
}
