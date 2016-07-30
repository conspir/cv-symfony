<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\MissionRepository")
 */
class Mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descritpion", type="text")
     */
    private $descritpion;
    
    /**
     * @var Experience
     * @ORM\ManyToOne(targetEntity="CvBundle\Entity\Experience")
     */
    private $experience;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Mission
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set descritpion
     *
     * @param string $descritpion
     *
     * @return Mission
     */
    public function setDescritpion($descritpion)
    {
        $this->descritpion = $descritpion;

        return $this;
    }

    /**
     * Get descritpion
     *
     * @return string
     */
    public function getDescritpion()
    {
        return $this->descritpion;
    }

    /**
     * Set experience
     *
     * @param \CvBundle\Entity\Experience $experience
     *
     * @return Mission
     */
    public function setExperience(\CvBundle\Entity\Experience $experience = null)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return \CvBundle\Entity\Experience
     */
    public function getExperience()
    {
        return $this->experience;
    }
}
