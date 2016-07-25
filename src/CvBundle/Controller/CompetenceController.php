<?php

namespace CvBundle\Controller;

use CvBundle\Entity\Competence;
use CvBundle\Form\CompetenceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompetenceController extends Controller {

    public function ajouterAction(Request $request) {

        $competence = new Competence();

        $form = $this->createForm(CompetenceType::class, $competence);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($competence);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Compétence enregistrée.');

                return $this->redirectToRoute('cv_administration');

            }

        }

        return $this->render('CvBundle:Competence:ajouter.html.twig', ['form' => $form->createView()]);
    }

}
