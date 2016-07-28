<?php

namespace CvBundle\Controller;

use CvBundle\Form\EntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CvBundle\Entity\Entreprise;

class EntrepriseController extends Controller {

    public function ajouterAction(Request $request) {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $entreprise);

        $form->handleRequest($request);

        if ($request->isMethod('POST')) {

            $image = $entreprise->getImage();

            $imagename = md5(uniqid()) . '.' . $image->getExtension();

            $image->move($this->getParameter('imagedir'), $imagename);

            $entreprise->setImage($image);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Enterprise enregistrée.');

            return $this->redirectToRoute('cv_administration');

        }

        return $this->render('CvBundle:Entreprise:ajouter.html.twig', ['form' => $form->createView()]);
    }

}
