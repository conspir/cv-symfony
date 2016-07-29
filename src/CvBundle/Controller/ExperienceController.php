<?php

namespace CvBundle\Controller;

use CvBundle\Entity\Experience;
use CvBundle\Form\ExperienceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExperienceController extends Controller {

    public function ajouterAction(Request $request) {

        $experience = new Experience();

        $form = $this->createForm(ExperienceType::class, $experience);

        $form->handleRequest($request);

        if ($request->isMethod('POST')) {

            $image = $experience->getEntreprise()->getImage();

            $imagename = md5(uniqid()) . '.' . $image->getExtension();

            $image->move($this->getParameter('imagedir'), $imagename);

            $entreprise = $experience->getEntreprise();

            $entreprise->setImage($image);

            $experience->setEntreprise($entreprise);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($experience);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Compétence enregistrée.');

            return $this->redirectToRoute('cv_administration');

        }

        return $this->render('CvBundle:Experience:ajouter.html.twig', ['form' => $form->createView()]);

    }
}
