<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="ischa_rendez_vous")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\RendezVousRepository")
 */
class RendezVous
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
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Lieu", mappedBy="rendezvous")
    */
    protected $lieux;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Coiffure", mappedBy="rendezvous")
    */
    protected $coiffures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="codesecurite", type="string", length=25)
     */
    private $codesecurite;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=25, nullable=true)
     */
    private $statut;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="rendezvouss", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Lieu", inversedBy="rendezvouss", cascade={"persist"})
    * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $lieu;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Coiffure", inversedBy="rendezvouss", cascade={"persist"})
    * @ORM\JoinColumn(name="coiffure_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $coiffure;
    
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RendezVous
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
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return RendezVous
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return RendezVous
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set codesecurite
     *
     * @param string $codesecurite
     *
     * @return RendezVous
     */
    public function setCodesecurite($codesecurite)
    {
        $this->codesecurite = $codesecurite;

        return $this;
    }

    /**
     * Get codesecurite
     *
     * @return string
     */
    public function getCodesecurite()
    {
        return $this->codesecurite;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return RendezVous
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Add lieux
     *
     * @param \Ischa\BackOfficeBundle\Entity\Lieu $lieux
     *
     * @return RendezVous
     */
    public function addLieux(\Ischa\BackOfficeBundle\Entity\Lieu $lieux)
    {
        $this->lieux[] = $lieux;

        return $this;
    }

    /**
     * Remove lieux
     *
     * @param \Ischa\BackOfficeBundle\Entity\Lieu $lieux
     */
    public function removeLieux(\Ischa\BackOfficeBundle\Entity\Lieu $lieux)
    {
        $this->lieux->removeElement($lieux);
    }

    /**
     * Get lieux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Add coiffure
     *
     * @param \Ischa\BackOfficeBundle\Entity\Coiffure $coiffure
     *
     * @return RendezVous
     */
    public function addCoiffure(\Ischa\BackOfficeBundle\Entity\Coiffure $coiffure)
    {
        $this->coiffures[] = $coiffure;

        return $this;
    }

    /**
     * Remove coiffure
     *
     * @param \Ischa\BackOfficeBundle\Entity\Coiffure $coiffure
     */
    public function removeCoiffure(\Ischa\BackOfficeBundle\Entity\Coiffure $coiffure)
    {
        $this->coiffures->removeElement($coiffure);
    }

    /**
     * Get coiffures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoiffures()
    {
        return $this->coiffures;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return RendezVous
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
     * Set lieu
     *
     * @param \Ischa\BackOfficeBundle\Entity\Lieu $lieu
     *
     * @return RendezVous
     */
    public function setLieu(\Ischa\BackOfficeBundle\Entity\Lieu $lieu = null)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return \Ischa\BackOfficeBundle\Entity\Lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set coiffure
     *
     * @param \Ischa\BackOfficeBundle\Entity\Coiffure $coiffure
     *
     * @return RendezVous
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
}
