<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\CompetenceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Competence {

    /**
     * Identifiant unique de la competence
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Libellé de la compétence
     * @var string
     * @ORM\Column(name="libelle", type="string", length=255, unique=true)
     */
    private $libelle;

    /**
     * Notation de la compétence
     * @var string
     * @ORM\Column(name="note", type="decimal", precision=1, scale=0)
     */
    private $note;

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
     * Famille de compétence
     * @var Competence
     * @ORM\ManyToOne(targetEntity="CvBundle\Entity\FamilleCompetence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $familleCompetence;

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
     * @return Competence
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
     * Set note
     * @param string $note
     * @return Competence
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     * @return string
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Set familleCompetence
     * @param \CvBundle\Entity\FamilleCompetence $familleCompetence
     * @return Competence
     */
    public function setFamilleCompetence(\CvBundle\Entity\FamilleCompetence $familleCompetence) {
        $this->familleCompetence = $familleCompetence;

        return $this;
    }

    /**
     * Get familleCompetence
     * @return \CvBundle\Entity\FamilleCompetence
     */
    public function getFamilleCompetence() {
        return $this->familleCompetence;
    }

    /**
     * Set datemodification
     * @param \DateTime $datemodification
     * @return Competence
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
     * @return Competence
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
