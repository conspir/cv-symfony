<?php

namespace CVUserBundle\DataFixtures\ORM;

use CVUserBundle\Entity\Utilisateur;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUtilisateur implements FixtureInterface
{
    
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        
        $user = new Utilisateur();
        $user->setUsername('gabriel');
        $user->setPlainPassword('thisisliving');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('mustiere.gabriel@gmail.com');
        $user->setEnabled(true);
        
        $manager->persist($user);
        $manager->flush();
        
    }
}