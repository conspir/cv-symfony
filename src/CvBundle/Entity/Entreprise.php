<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile as File;

/**
 * Entreprise
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="CvBundle\Repository\EntrepriseRepository")
 */
class Entreprise {

    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="raisonsocial", type="string", length=255, unique=true)
     */
    private $raisonsocial;

    /**
     * @var string
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     * @ORM\Column(name="codepostal", type="string", length=255)
     */
    private $codepostal;

    /**
     * @var string
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     * @ORM\Column(name="web", type="string", length=255, nullable=true)
     */
    private $web;

    /**
     * @var Experience
     * @ORM\OneToOne(targetEntity="CvBundle\Entity\Experience", mappedBy="entreprise")
     */    
    private $experience;

    /**
     * @var File
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * Get id
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     * @param string $raisonsocial
     * @return Entreprise
     */
    public function setRaisonsocial($raisonsocial) {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    /**
     * Get libelle
     * @return string
     */
    public function getRaisonsocial() {
        return $this->raisonsocial;
    }

    /**
     * Set adresse
     * @param string $adresse
     * @return Entreprise
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     * @return string
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set codepostal
     * @param string $codepostal
     * @return Entreprise
     */
    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     * @return string
     */
    public function getCodepostal() {
        return $this->codepostal;
    }

    /**
     * Set ville
     * @param string $ville
     * @return Entreprise
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set telephone
     * @param string $telephone
     * @return Entreprise
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set web
     * @param string $web
     * @return Entreprise
     */
    public function setWeb($web) {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     * @return string
     */
    public function getWeb() {
        return $this->web;
    }

    /**
     * Set image
     * @param File $image
     * @return Entreprise
     */
    public function setImage(File $image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     * @return File
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set experience
     *
     * @param \CvBundle\Entity\Experience $experience
     *
     * @return Entreprise
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
