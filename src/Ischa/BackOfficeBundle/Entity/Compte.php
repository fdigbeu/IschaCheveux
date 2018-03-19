<?php

namespace Ischa\BackOfficeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="ischa_compte")
 */
class Compte extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Avis", mappedBy="compte")
    */
    protected $aviss;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\RendezVous", mappedBy="compte")
    */
    protected $rendezvouss;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Stock", mappedBy="compte")
    */
    protected $stocks;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Produit", mappedBy="compte")
    */
    protected $produits;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Galerie", mappedBy="compte")
    */
    protected $galeries;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Coiffure", mappedBy="compte")
    */
    protected $coiffures;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Lieu", mappedBy="compte")
    */
    protected $lieux;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Tarif", mappedBy="compte")
    */
    protected $tarifs;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\TypeProduit", mappedBy="compte")
    */
    protected $typeproduits;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Devise", mappedBy="compte")
    */
    protected $devises;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Commande", mappedBy="compte")
    */
    protected $commandes;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Facture", mappedBy="compte")
    */
    protected $factures;
    
	/**
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Client", inversedBy="comptes", cascade={"persist"})
    * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $client;

    public function __construct()
    {
        parent::__construct();
        
       $this->aviss = new ArrayCollection();
       $this->rendezvouss = new ArrayCollection();
       $this->stocks = new ArrayCollection();
       $this->produits = new ArrayCollection();
       $this->galeries = new ArrayCollection();
       $this->coiffures = new ArrayCollection();
       $this->lieux = new ArrayCollection();
       $this->tarifs = new ArrayCollection();
       $this->typeproduits = new ArrayCollection();
       $this->devises = new ArrayCollection();
       $this->commandes = new ArrayCollection();
       $this->factures = new ArrayCollection();
    }

    /**
     * Add aviss
     *
     * @param \Ischa\BackOfficeBundle\Entity\Avis $aviss
     *
     * @return Compte
     */
    public function addAviss(\Ischa\BackOfficeBundle\Entity\Avis $aviss)
    {
        $this->aviss[] = $aviss;

        return $this;
    }

    /**
     * Remove aviss
     *
     * @param \Ischa\BackOfficeBundle\Entity\Avis $aviss
     */
    public function removeAviss(\Ischa\BackOfficeBundle\Entity\Avis $aviss)
    {
        $this->aviss->removeElement($aviss);
    }

    /**
     * Get aviss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAviss()
    {
        return $this->aviss;
    }

    /**
     * Add rendezvouss
     *
     * @param \Ischa\BackOfficeBundle\Entity\RendezVous $rendezvouss
     *
     * @return Compte
     */
    public function addRendezvouss(\Ischa\BackOfficeBundle\Entity\RendezVous $rendezvouss)
    {
        $this->rendezvouss[] = $rendezvouss;

        return $this;
    }

    /**
     * Remove rendezvouss
     *
     * @param \Ischa\BackOfficeBundle\Entity\RendezVous $rendezvouss
     */
    public function removeRendezvouss(\Ischa\BackOfficeBundle\Entity\RendezVous $rendezvouss)
    {
        $this->rendezvouss->removeElement($rendezvouss);
    }

    /**
     * Get rendezvouss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRendezvouss()
    {
        return $this->rendezvouss;
    }

    /**
     * Add stock
     *
     * @param \Ischa\BackOfficeBundle\Entity\Stock $stock
     *
     * @return Compte
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
     * Add produit
     *
     * @param \Ischa\BackOfficeBundle\Entity\Produit $produit
     *
     * @return Compte
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

    /**
     * Add galery
     *
     * @param \Ischa\BackOfficeBundle\Entity\Galerie $galery
     *
     * @return Compte
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
     * Add coiffure
     *
     * @param \Ischa\BackOfficeBundle\Entity\Coiffure $coiffure
     *
     * @return Compte
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
     * Add lieux
     *
     * @param \Ischa\BackOfficeBundle\Entity\Lieu $lieux
     *
     * @return Compte
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
     * Add tarif
     *
     * @param \Ischa\BackOfficeBundle\Entity\Tarif $tarif
     *
     * @return Compte
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

    /**
     * Add typeproduit
     *
     * @param \Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit
     *
     * @return Compte
     */
    public function addTypeproduit(\Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit)
    {
        $this->typeproduits[] = $typeproduit;

        return $this;
    }

    /**
     * Remove typeproduit
     *
     * @param \Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit
     */
    public function removeTypeproduit(\Ischa\BackOfficeBundle\Entity\TypeProduit $typeproduit)
    {
        $this->typeproduits->removeElement($typeproduit);
    }

    /**
     * Get typeproduits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeproduits()
    {
        return $this->typeproduits;
    }

    /**
     * Add devise
     *
     * @param \Ischa\BackOfficeBundle\Entity\Devise $devise
     *
     * @return Compte
     */
    public function addDevise(\Ischa\BackOfficeBundle\Entity\Devise $devise)
    {
        $this->devises[] = $devise;

        return $this;
    }

    /**
     * Remove devise
     *
     * @param \Ischa\BackOfficeBundle\Entity\Devise $devise
     */
    public function removeDevise(\Ischa\BackOfficeBundle\Entity\Devise $devise)
    {
        $this->devises->removeElement($devise);
    }

    /**
     * Get devises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevises()
    {
        return $this->devises;
    }

    /**
     * Add commande
     *
     * @param \Ischa\BackOfficeBundle\Entity\Commande $commande
     *
     * @return Compte
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

    /**
     * Add facture
     *
     * @param \Ischa\BackOfficeBundle\Entity\Facture $facture
     *
     * @return Compte
     */
    public function addFacture(\Ischa\BackOfficeBundle\Entity\Facture $facture)
    {
        $this->factures[] = $facture;

        return $this;
    }

    /**
     * Remove facture
     *
     * @param \Ischa\BackOfficeBundle\Entity\Facture $facture
     */
    public function removeFacture(\Ischa\BackOfficeBundle\Entity\Facture $facture)
    {
        $this->factures->removeElement($facture);
    }

    /**
     * Get factures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * Set compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Compte
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
     * Set client
     *
     * @param \Ischa\BackOfficeBundle\Entity\Client $client
     *
     * @return Compte
     */
    public function setClient(\Ischa\BackOfficeBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Ischa\BackOfficeBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
