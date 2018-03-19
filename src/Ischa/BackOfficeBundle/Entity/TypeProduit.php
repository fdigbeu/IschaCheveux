<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * TypeProduit
 *
 * @ORM\Table(name="ischa_type_produit")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\TypeProduitRepository")
 */
class TypeProduit
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
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="typeproduits", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Produit", mappedBy="typeproduit")
    */
    protected $produits;
	
	public function __construct()
    {
       $this->produits = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
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
     * @return TypeProduit
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
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return TypeProduit
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
     * Add produit
     *
     * @param \Ischa\BackOfficeBundle\Entity\Produit $produit
     *
     * @return TypeProduit
     */
    public function addProduit(\Ischa\BackOfficeBundle\Entity\Produit $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \Ischa\BackOfficeBundle\Entity\Produit $produit
     */
    public function removeProduit(\Ischa\BackOfficeBundle\Entity\Produit $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }
}
