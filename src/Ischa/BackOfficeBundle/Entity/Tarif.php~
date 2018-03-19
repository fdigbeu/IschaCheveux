<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tarif
 *
 * @ORM\Table(name="ischa_tarif")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\TarifRepository")
 */
class Tarif
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
     * @ORM\Column(name="prix_unitaire", type="decimal", precision=10, scale=2)
     */
    private $prixUnitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_promo", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $pourcentagePromo;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="tarifs", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Stock", mappedBy="tarif")
    */
    protected $stocks;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Galerie", mappedBy="tarif")
    */
    protected $galeries;
    
    /**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Devise", inversedBy="tarifs", cascade={"persist"})
    * @ORM\JoinColumn(name="devise_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $devise;

	public function __construct()
    {
       $this->stocks = new ArrayCollection();
       $this->galeries = new ArrayCollection();
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
     * Set prixUnitaire
     *
     * @param string $prixUnitaire
     *
     * @return Tarif
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return string
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set pourcentagePromo
     *
     * @param string $pourcentagePromo
     *
     * @return Tarif
     */
    public function setPourcentagePromo($pourcentagePromo)
    {
        $this->pourcentagePromo = $pourcentagePromo;

        return $this;
    }

    /**
     * Get pourcentagePromo
     *
     * @return string
     */
    public function getPourcentagePromo()
    {
        return $this->pourcentagePromo;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Tarif
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
     * Add stock
     *
     * @param \Ischa\BackOfficeBundle\Entity\Stock $stock
     *
     * @return Tarif
     */
    public function addStock(\Ischa\BackOfficeBundle\Entity\Stock $stock)
    {
        $this->stocks[] = $stock;

        return $this;
    }

    /**
     * Remove stock
     *
     * @param \Ischa\BackOfficeBundle\Entity\Stock $stock
     */
    public function removeStock(\Ischa\BackOfficeBundle\Entity\Stock $stock)
    {
        $this->stocks->removeElement($stock);
    }

    /**
     * Get stocks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStocks()
    {
        return $this->stocks;
    }

    /**
     * Add galery
     *
     * @param \Ischa\BackOfficeBundle\Entity\Galerie $galery
     *
     * @return Tarif
     */
    public function addGalery(\Ischa\BackOfficeBundle\Entity\Galerie $galery)
    {
        $this->galeries[] = $galery;

        return $this;
    }

    /**
     * Remove galery
     *
     * @param \Ischa\BackOfficeBundle\Entity\Galerie $galery
     */
    public function removeGalery(\Ischa\BackOfficeBundle\Entity\Galerie $galery)
    {
        $this->galeries->removeElement($galery);
    }

    /**
     * Get galeries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGaleries()
    {
        return $this->galeries;
    }

    /**
     * Set devise
     *
     * @param \Ischa\BackOfficeBundle\Entity\Devise $devise
     *
     * @return Tarif
     */
    public function setDevise(\Ischa\BackOfficeBundle\Entity\Devise $devise = null)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return \Ischa\BackOfficeBundle\Entity\Devise
     */
    public function getDevise()
    {
        return $this->devise;
    }
}
