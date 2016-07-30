<?php

namespace CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction() {
        $manager = $this->getDoctrine()->getManager();
        $repositoryFamilleCompetence = $manager->getRepository('CvBundle:FamilleCompetence');
        $listeFamilleCompetence = $repositoryFamilleCompetence->getFamilleCompetenceWithCompetence();
        
        $repositoryExperience = $manager->getRepository('CvBundle:Experience');
        $listeExperience = $repositoryExperience->findAll();
        return $this->render('CvBundle:Home:index.html.twig', ['famillecompetence' => $listeFamilleCompetence, 'experiences' => $listeExperience]);
    }

    public function experiencesAction() {
        $listeExperiences = $this->getDoctrine()->getManager()->getRepository('CvBundle:Experience')->findAll();
        return $this->render('CvBundle:Home:experiences.html.twig', ['experiences' => $listeExperiences]);
    }

    public function formationsAction() {
        return $this->render('CvBundle:Home:formations.html.twig');
    }

    public function administrationAction() {
        return $this->render('CvBundle:Home:administration.html.twig');
    }

    public function competencesAction() {
        $listeFamilleCompetence = $this->getDoctrine()->getManager()->getRepository('CvBundle:FamilleCompetence');
        return $this->render('CvBundle:Competence:competences.html.twig', ['famillecompetence' => $listeFamilleCompetence,]);
    }
}


