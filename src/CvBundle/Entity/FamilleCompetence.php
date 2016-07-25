<?php

namespace CvBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use CvBundle\Entity\Competence;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * FamilleCompetence
 * @ORM\Table(name="famille_competence")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\FamilleCompetenceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class FamilleCompetence
{
    
    /**
     * Identifiant unique de la famille de compétences
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * Libelle de la famille de compétences
     * @var string
     * @ORM\Column(name="libelle", type="string", length=255, unique=true)
     */
    private $libelle;
    
    /**
     * Indice de poids
     * @var int
     * @ORM\Column(name="indice", type="integer", unique=true)
     */
    private $indice;
    
    /**
     * Date de modification
     * @var string
     * @ORM\Column(name="datemodification", type="datetime", nullable=false)
     */
    private $datemodification;
    
    /**
     * Date de creation
     * @var string
     * @ORM\Column(name="datecreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * Compétences
     * @var []
     * @ORM\OneToMany(targetEntity="Competence", mappedBy="familleCompetence")
     */
    private $competences;

    public function __construct() {
        $this->competences = new ArrayCollection();
    }
    
    /**
     * Get id
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Set libelle
     * @param string $libelle
     * @return FamilleCompetence
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        
        return $this;
    }
    
    /**
     * Get libelle
     * @return string
     */
    public function getLibelle() {
        return $this->libelle;
    }
    
    /**
     * Set indice
     * @param integer $indice
     * @return FamilleCompetence
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        
        return $this;
    }
    
    /**
     * Get indice
     * @return int
     */
    public function getIndice() {
        return $this->indice;
    }
    
    /**
     * Set datemodification
     * @param \DateTime $datemodification
     * @return FamilleCompetence
     */
    public function setDatemodification($datemodification) {
        $this->datemodification = $datemodification;
        
        return $this;
    }
    
    /**
     * Get datemodification
     * @return \DateTime
     */
    public function getDatemodification() {
        return $this->datemodification;
    }
    
    /**
     * Set datecreation
     * @param \DateTime $datecreation
     * @return FamilleCompetence
     */
    public function setDatecreation($datecreation) {
        $this->datecreation = $datecreation;
        
        return $this;
    }
    
    /**
     * Get datecreation
     * @return \DateTime
     */
    public function getDatecreation() {
        return $this->datecreation;
    }

    /**
     * Set compétences
     * @param [] $competences
     */
    public function setCompetences($competences) {
        $this->competences = $competences;
    }

    /**
     * Add compétence
     * @param Competence $competence
     * @return $this
     */
    public function addCompetence(Competence $competence) {
        $this->competences[] = $competence;
    }
    
    /**
     * Remove compétence
     * @param Competence $competence
     */
    public function removeCompetence(Competence $competence) {
        $this->competences->removeElement($competence);
    }

    /**
     * Get datecreation
     * @return Competence[]
     */
    public function getCompetences() {
        return $this->competences->toArray();
    }
    
    /**
     * @ORM\PrePersist()
     */
    public function avantPersist() {
        $this->miseajourDatecreation();
        $this->miseajourDatemodification();
    }
    
    /**
     * @ORM\PreUpdate()
     */
    public function avantUpdate() {
        $this->miseajourDatemodification();
    }
    
    /**
     * Mettre à jour la date de création
     */
    public function miseajourDatecreation() {
        $this->setDatecreation(new \DateTime());
    }
    
    /**
     * Mettre à jour de la date de modification
     */
    public function miseajourDatemodification() {
        $this->setDatemodification(new \DateTime());
    }
}
