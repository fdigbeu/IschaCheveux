<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="ischa_facture")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\FactureRepository")
 */
class Facture
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
     * @ORM\Column(name="numero", type="string", length=50)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="acquittee", type="boolean", nullable=true)
     */
    private $acquittee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_acquittee", type="date", nullable=true)
     */
    private $date_acquittee;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_ttc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantTtc;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="factures", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;

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
     * Set numero
     *
     * @param string $numero
     *
     * @return Facture
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Facture
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
     * Set acquittee
     *
     * @param boolean $acquittee
     *
     * @return Facture
     */
    public function setAcquittee($acquittee)
    {
        $this->acquittee = $acquittee;

        return $this;
    }

    /**
     * Get acquittee
     *
     * @return boolean
     */
    public function getAcquittee()
    {
        return $this->acquittee;
    }

    /**
     * Set dateAcquittee
     *
     * @param \DateTime $dateAcquittee
     *
     * @return Facture
     */
    public function setDateAcquittee($dateAcquittee)
    {
        $this->date_acquittee = $dateAcquittee;

        return $this;
    }

    /**
     * Get dateAcquittee
     *
     * @return \DateTime
     */
    public function getDateAcquittee()
    {
        return $this->date_acquittee;
    }

    /**
     * Set montantTtc
     *
     * @param string $montantTtc
     *
     * @return Facture
     */
    public function setMontantTtc($montantTtc)
    {
        $this->montantTtc = $montantTtc;

        return $this;
    }

    /**
     * Get montantTtc
     *
     * @return string
     */
    public function getMontantTtc()
    {
        return $this->montantTtc;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Facture
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
}
