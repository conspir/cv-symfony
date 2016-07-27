<?php

namespace CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        $manager = $this->getDoctrine()->getManager();
        $repositoryFamilleCompetence = $manager->getRepository('CvBundle:FamilleCompetence');

        $listeFamilleCompetence = $repositoryFamilleCompetence->getFamilleCompetenceWithCompetence();
        return $this->render('CvBundle:Home:index.html.twig', ['famillecompetence' => $listeFamilleCompetence]);
    }

    public function experiencesAction() {
        return $this->render('CvBundle:Home:experiences.html.twig');
    }

    public function formationsAction() {
        return $this->render('CvBundle:Home:formations.html.twig');
    }

    public function administrationAction() {
        return $this->render('CvBundle:Home:administration.html.twig');
    }

    public function competencesAction() {
        $listeFamilleCompetence = $this->getDoctrine()->getManager()->getRepository('CvBundle:FamilleCompetence')->getFamilleCompetenceWithCompetence();
        return $this->render('CvBundle:Competence:competences.html.twig', ['famillecompetence' => $listeFamilleCompetence,]);
    }
}
