<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Devise
 *
 * @ORM\Table(name="ischa_devise")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\DeviseRepository")
 */
class Devise
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
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=20)
     */
    private $abreviation;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="devises", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Tarif", mappedBy="devise")
    */
    protected $tarifs;
	
	public function __construct()
    {
       $this->tarifs = new ArrayCollection();
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
     * @return Devise
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
     * Set abreviation
     *
     * @param string $abreviation
     *
     * @return Devise
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Devise
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
     * Add tarif
     *
     * @param \Ischa\BackOfficeBundle\Entity\Tarif $tarif
     *
     * @return Devise
     */
    public function addTarif(\Ischa\BackOfficeBundle\Entity\Tarif $tarif)
    {
        $this->tarifs[] = $tarif;

        return $this;
    }

    /**
     * Remove tarif
     *
     * @param \Ischa\BackOfficeBundle\Entity\Tarif $tarif
     */
    public function removeTarif(\Ischa\BackOfficeBundle\Entity\Tarif $tarif)
    {
        $this->tarifs->removeElement($tarif);
    }

    /**
     * Get tarifs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }
}
