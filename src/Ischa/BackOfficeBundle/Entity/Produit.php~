<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Produit
 *
 * @ORM\Table(name="ischa_produit")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="libelle", type="string", length=150)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=150)
     */
    private $image1;

    /**
     * @var string
     *
     * @ORM\Column(name="image2", type="string", length=150, nullable=true)
     */
    private $image2;

    /**
     * @var string
     *
     * @ORM\Column(name="image3", type="string", length=150, nullable=true)
     */
    private $image3;

    /**
     * @var string
     *
     * @ORM\Column(name="image4", type="string", length=150, nullable=true)
     */
    private $image4;
	
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="produits", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Stock", mappedBy="produit")
    */
    protected $stocks;
    
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\TypeProduit", inversedBy="produits", cascade={"persist"})
    * @ORM\JoinColumn(name="typeproduit_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $typeproduit;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Commande", mappedBy="produit")
    */
    protected $commandes;

	
	public function __construct()
    {
       $this->stocks = new ArrayCollection();
       $this->commandes = new ArrayCollection();
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
     * @return Produit
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
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Produit
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
     * @return Produit
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
     * Set image1
     *
     * @param string $image1
     *
     * @return Produit
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     *
     * @return Produit
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image3
     *
     * @param string $image3
     *
     * @return Produit
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image4
     *
     * @param string $image4
     *
     * @return Produit
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Produit
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
     * @return Produit
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
     * Set typeproduit
     *
     * @param \Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit
     *
     * @return Produit
     */
    public function setTypeproduit(\Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit = null)
    {
        $this->typeproduit = $typeproduit;

        return $this;
    }

    /**
     * Get typeproduit
     *
     * @return \Ischa\BackOfficeBundle\Entity\TypeProduit
     */
    public function getTypeproduit()
    {
        return $this->typeproduit;
    }

    /**
     * Add commande
     *
     * @param \Ischa\BackOfficeBundle\Entity\Commande $commande
     *
     * @return Produit
     */
    public function addCommande(\Ischa\BackOfficeBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Ischa\BackOfficeBundle\Entity\Commande $commande
     */
    public function removeCommande(\Ischa\BackOfficeBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
}
