<?php

namespace CVUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="CVUserBundle\Repository\UserRepository")
 */
class Utilisateur {

    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var array
     * @ORM\Column(name="roles", type="array")
     */
    private $roles;

    /**
     * Get id
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get username
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set password
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set salt
     * @param string $salt
     * @return Utilisateur
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     * @return string
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Set roles
     * @param array $roles
     * @return Utilisateur
     */
    public function setRoles($roles) {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     * @return array
     */
    public function getRoles() {
        return $this->roles;
    }

    public function eraseCredentials() {
    }
}

