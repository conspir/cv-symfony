<?php

namespace CvBundle\Controller;

use CvBundle\Entity\Tag;
use CvBundle\Form\TagType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagController extends Controller {

    public function ajouterAction(Request $request) {

        $tag = new Tag();

        $form = $this->createForm(TagType::class, $tag);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($tag);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Tag enregistré.');

                return $this->redirectToRoute('cv_administration');

            }

        }
        return $this->render('CvBundle:Tag:ajouter.html.twig', ['form' => $form->createView()]);

    }
}
