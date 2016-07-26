<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 26/07/2016
 * Time: 13:20
 */

namespace CvBundle\DataFixtures\ORM;

use CvBundle\Entity\Competence;
use CvBundle\Entity\FamilleCompetence;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCompetence implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {

        /**
         * LANGAGES
         */

        $langage = new FamilleCompetence();
        $langage->setLibelle('langages');
        $langage->setIndice(0);
        $manager->persist($langage);

        $php = new Competence();
        $php->setLibelle('php');
        $php->setNote('4.5');
        $php->setFamilleCompetence($langage);
        $manager->persist($php);

        $html = new Competence();
        $html->setLibelle('html');
        $html->setNote('4');
        $html->setFamilleCompetence($langage);
        $manager->persist($html);

        $css = new Competence();
        $css->setLibelle('css');
        $css->setNote('4');
        $css->setFamilleCompetence($langage);
        $manager->persist($css);

        $javascript = new Competence();
        $javascript->setLibelle('javascript');
        $javascript->setNote('4');
        $javascript->setFamilleCompetence($langage);
        $manager->persist($javascript);

        $java = new Competence();
        $java->setLibelle('java');
        $java->setNote('2.5');
        $java->setFamilleCompetence($langage);
        $manager->persist($java);

        /**
         * FK ET LIB
         */

        $fklib = new FamilleCompetence();
        $fklib->setLibelle('frameworks et librairies');
        $fklib->setIndice(1);
        $manager->persist($fklib);

        $esope = new Competence();
        $esope->setLibelle('esope (homemade php mvc)');
        $esope->setNote('5');
        $esope->setFamilleCompetence($fklib);
        $manager->persist($esope);

        $symfony = new Competence();
        $symfony->setLibelle('symfony 2/3');
        $symfony->setNote('3.5');
        $symfony->setFamilleCompetence($fklib);
        $manager->persist($symfony);

        $laravel = new Competence();
        $laravel->setLibelle('laravel 5');
        $laravel->setNote('2.5');
        $laravel->setFamilleCompetence($fklib);
        $manager->persist($laravel);

        $angular = new Competence();
        $angular->setLibelle('angularjs');
        $angular->setNote('2');
        $angular->setFamilleCompetence($fklib);
        $manager->persist($angular);

        $bootstrap = new Competence();
        $bootstrap->setLibelle('bootstrap');
        $bootstrap->setNote('4.5');
        $bootstrap->setFamilleCompetence($fklib);
        $manager->persist($bootstrap);

        /**
         * TRANSVERSES
         */

        $transverses = new FamilleCompetence();
        $transverses->setLibelle('transverses');
        $transverses->setIndice(2);
        $manager->persist($transverses);

        $gp = new Competence();
        $gp->setLibelle('gestion de projet');
        $gp->setNote('3');
        $gp->setFamilleCompetence($transverses);
        $manager->persist($gp);

        $analyse = new Competence();
        $analyse->setLibelle('analyse fonctionnelle');
        $analyse->setNote('4');
        $analyse->setFamilleCompetence($transverses);
        $manager->persist($analyse);

        $management = new Competence();
        $management->setLibelle('management');
        $management->setNote('3');
        $management->setFamilleCompetence($transverses);
        $manager->persist($management);

        $iso = new Competence();
        $iso->setLibelle('ISO9001/25051');
        $iso->setNote('3.5');
        $iso->setFamilleCompetence($transverses);
        $manager->persist($iso);

        $nf = new Competence();
        $nf->setLibelle('nf525');
        $nf->setNote('4');
        $nf->setFamilleCompetence($transverses);
        $manager->persist($nf);

        /**
         * DIVERSES
         */

        $diverses = new FamilleCompetence();
        $diverses->setLibelle('diverses');
        $diverses->setIndice(3);
        $manager->persist($diverses);

        $svn = new Competence();
        $svn->setLibelle('svn');
        $svn->setNote('3.5');
        $svn->setFamilleCompetence($diverses);
        $manager->persist($svn);

        $git = new Competence();
        $git->setLibelle('git');
        $git->setNote('4');
        $git->setFamilleCompetence($diverses);
        $manager->persist($git);

        $phpstorm = new Competence();
        $phpstorm->setLibelle('phpstorm');
        $phpstorm->setNote('4');
        $phpstorm->setFamilleCompetence($diverses);
        $manager->persist($phpstorm);

        $wapp = new Competence();
        $wapp->setLibelle('wapp');
        $wapp->setNote('3.5');
        $wapp->setFamilleCompetence($diverses);
        $manager->persist($wapp);

        $manager->flush();
    }
}
