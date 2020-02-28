<?php

namespace App\Controller;

use App\Entity\Engagement;
use App\Form\EngagementType;
use App\Repository\EngagementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BudgetRepository;
use App\Repository\CompteRepository;
use App\Repository\CommandeRepository;


/**
 * @Route("/engagement")
 */
class EngagementController extends AbstractController
{
    /**
     * @Route("/", name="engagement_index", methods={"GET"})
     */
    public function index(EngagementRepository $engagementRepository): Response
    {
        return $this->render('engagement/index.html.twig', [
            'engagements' => $engagementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="engagement_new", methods={"GET","POST"})
     */
    public function new(Request $request,EngagementRepository $engagementRepository,BudgetRepository $budgetRepositoty,CompteRepository $compteRepository,CommandeRepository $commandeRepository): Response
    {
       /* 
       if($request->request->count() > 0)
        {
             $engagement = new Engagement();
             $engagement->setMontant($request->request->get('montant'))
             ->setDate(new \DateTime())
             ->setNumeroOrdrePaiement($request->request->get('numeroOrdrePaiement'))
      ->setCommande($commandeRepository->findOneByNumero($request->request->get('commandeNumero')))
      ->setCompte($compteRepository ->findOneByNumero($request->request->get('compteNumero')))
       ->setBudget($budgetRepositoty ->findOneByNumero($request->request->get('budgetNumero')))
         ;
         */
        $engagement = new Engagement();
        $form = $this->createForm(EngagementType::class, $engagement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
               //on cherche le montant total des engagements par budget
         $engagementParBudgetLists=$engagementRepository->findByBudget($engagement->getBudget());
         $montantTotalEngagementParBudget=0;
         foreach($engagementParBudgetLists as $engagementParBudgetList)
         {
             $montantTotalEngagementParBudget=$montantTotalEngagementParBudget + $engagementParBudgetList->getMontant();
         }
         $montantTotalEngagementParBudget = $montantTotalEngagementParBudget + $engagement->getMontant();

         //on cherche le montant total des engagements par commande
         $engagementParCommandeLists=$engagementRepository->findByCommande($engagement->getCommande());
         $montantTotalEngagementParCommande=0;
         foreach($engagementParCommandeLists as $engagementParCommandeList)
         {
             $montantTotalEngagementParCommande=$montantTotalEngagementParCommande + $engagementParCommandeList->getMontant();
         }
         $montantTotalEngagementParCommande = $montantTotalEngagementParCommande + $engagement->getMontant();

         if($engagement->getBudget()->getMontant()<$montantTotalEngagementParBudget)
         {
             //depassement budgetaire
             $this->addFlash('info','vous ne pouvez pas faire un engagement car DEPASSEMENT BUDGETAIRE ');
         }
         elseif($engagement->getCommande()->getMontant()<$montantTotalEngagementParCommande) {
           // $this->addFlash('info','montant commande > montant total engagement');

         }
         else {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($engagement);
            $entityManager->flush();
             $this->addFlash('info','reussi ✅');

         }

            return $this->redirectToRoute('engagement_index');
        }

        return $this->render('engagement/new.html.twig', [
            'engagement' => $engagement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="engagement_show", methods={"GET"})
     */
    public function show(Engagement $engagement): Response
    {
        return $this->render('engagement/show.html.twig', [
            'engagement' => $engagement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="engagement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Engagement $engagement): Response
    {
        $form = $this->createForm(EngagementType::class, $engagement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('engagement_index');
        }
        
        return $this->render('engagement/edit.html.twig', [
            'engagement' => $engagement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="engagement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Engagement $engagement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$engagement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($engagement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('engagement_index');
    }
}
