<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 26/07/2016
 * Time: 11:41
 */

namespace CVUserBundle\DataFixtures\ORM;

use CVUserBundle\Entity\Utilisateur;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUtilisateur implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {

        $user = new Utilisateur();
        $user->setNom('admin');
        $user->setPassword('admin');
        $user->setSalt('');
        $user->setRoles(['ROLE_ADMIN']);

        $manager->persist($user);
        $manager->flush();
    }
}