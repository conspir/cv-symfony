<?php

namespace CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        return $this->render('CvBundle:Home:index.html.twig');
    }

    public function experiencesAction() {
        return $this->render('CvBundle:Home:experiences.html.twig');
    }

    public function formationsAction() {
        return $this->render('CvBundle:Home:formations.html.twig');
    }

    public function competencesACtion() {
        return $this->render('CvBundle:Home:competences.html.twig');
    }
}
