<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\ExperienceRepository")
 */
class Experience
{

    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     */
    private $titre;

    /**
     * @var \DateTime
     * @ORM\Column(name="datedebut", type="datetime")
     */
    private $datedebut;

    /**
     * @var \DateTime
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Entreprise
     * @ORM\OneToOne(targetEntity="CvBundle\Entity\Entreprise", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;

    /**
     * Get id
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     * @param string $titre
     * @return Experience
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set datedebut
     * @param \DateTime $datedebut
     * @return Experience
     */
    public function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     * @return \DateTime
     */
    public function getDatedebut() {
        return $this->datedebut;
    }

    /**
     * Set datefin
     * @param \DateTime $datefin
     * @return Experience
     */
    public function setDatefin($datefin) {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     * @return \DateTime
     */
    public function getDatefin() {
        return $this->datefin;
    }

    /**
     * Set description
     * @param string $description
     * @return Experience
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tag
     * @param \CvBundle\Entity\Tag $tag
     * @return Experience
     */
    public function addTag(\CvBundle\Entity\Tag $tag) {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     * @param \CvBundle\Entity\Tag $tag
     */
    public function removeTag(\CvBundle\Entity\Tag $tag) {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Set entreprise
     * @param \CvBundle\Entity\Entreprise $entreprise
     * @return Experience
     */
    public function setEntreprise(\CvBundle\Entity\Entreprise $entreprise = NULL) {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     * @return \CvBundle\Entity\Entreprise
     */
    public function getEntreprise() {
        return $this->entreprise;
    }
}
