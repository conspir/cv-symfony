<?php

namespace CVUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="CVUserBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser {

    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

}

