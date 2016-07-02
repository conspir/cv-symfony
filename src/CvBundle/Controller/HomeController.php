<?php

namespace cvbundle\Controller;

use symfony\Bundle\Frameworkbundle\Controller\Controller;

class homecontroller extends controller {

    public function indexaction() {
        return $this->render('cvbundle:home:index.html.twig');
    }

    public function experiencesaction() {
        return $this->render('cvbundle:home:experiences.html.twig');
    }

    public function formationsaction() {
        return $this->render('cvbundle:home:formations.html.twig');
    }

    public function competencesaction() {
        return $this->render('cvbundle:home:competences.html.twig');
    }
}
