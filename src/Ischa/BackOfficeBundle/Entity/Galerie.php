<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galerie
 *
 * @ORM\Table(name="ischa_galerie")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\GalerieRepository")
 */
class Galerie
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
     * @ORM\Column(name="libelle", type="string", length=150, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=150)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var bool
     *
     * @ORM\Column(name="nouveaute", type="boolean", nullable=true)
     */
    private $nouveaute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="galeries", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Coiffure", inversedBy="galeries", cascade={"persist"})
    * @ORM\JoinColumn(name="coiffure_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $coiffure;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Tarif", inversedBy="galeries", cascade={"persist"})
    * @ORM\JoinColumn(name="tarif_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $tarif;

    public function __construct()
    {
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Galerie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Galerie
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Galerie
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set nouveaute
     *
     * @param boolean $nouveaute
     *
     * @return Galerie
     */
    public function setNouveaute($nouveaute)
    {
        $this->nouveaute = $nouveaute;

        return $this;
    }

    /**
     * Get nouveaute
     *
     * @return boolean
     */
    public function getNouveaute()
    {
        return $this->nouveaute;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Galerie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Galerie
     */
    public function setCompte(\Ischa\BackOfficeBundle\Entity\Compte $compte = null)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \Ischa\BackOfficeBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set coiffure
     *
     * @param \Ischa\BackOfficeBundle\Entity\Coiffure $coiffure
     *
     * @return Galerie
     */
    public function setCoiffure(\Ischa\BackOfficeBundle\Entity\Coiffure $coiffure = null)
    {
        $this->coiffure = $coiffure;

        return $this;
    }

    /**
     * Get coiffure
     *
     * @return \Ischa\BackOfficeBundle\Entity\Coiffure
     */
    public function getCoiffure()
    {
        return $this->coiffure;
    }

    /**
     * Set tarif
     *
     * @param \Ischa\BackOfficeBundle\Entity\Tarif $tarif
     *
     * @return Galerie
     */
    public function setTarif(\Ischa\BackOfficeBundle\Entity\Tarif $tarif = null)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return \Ischa\BackOfficeBundle\Entity\Tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }
}
