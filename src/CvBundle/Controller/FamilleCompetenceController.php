<?php

namespace CvBundle\Controller;

use CvBundle\Entity\FamilleCompetence;
use CvBundle\Form\FamilleCompetenceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FamilleCompetenceController extends Controller
{

    public function ajouterAction(Request $request) {

        $familleCompetence = new FamilleCompetence();

        $form = $this->createForm(FamilleCompetenceType::class, $familleCompetence);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($familleCompetence);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Famille de compétence enregistrée.');

                return $this->redirectToRoute('cv_administration');

            }

        }

        return $this->render('CvBundle:FamilleCompetence:ajouter.html.twig', ['form' => $form->createView()]);
    }
}
