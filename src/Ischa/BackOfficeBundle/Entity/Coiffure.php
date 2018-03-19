<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Coiffure
 *
 * @ORM\Table(name="ischa_coiffure")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\CoiffureRepository")
 */
class Coiffure
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
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="coiffures", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\RendezVous", mappedBy="coiffure")
    */
    protected $rendezvouss;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Galerie", mappedBy="coiffure")
    */
    protected $galeries;
    
    public function __construct()
    {
       $this->rendezvouss = new ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Coiffure
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
     * @return Coiffure
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
     * Add rendezvouss
     *
     * @param \Ischa\BackOfficeBundle\Entity\RendezVous $rendezvouss
     *
     * @return Coiffure
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
     * Add galery
     *
     * @param \Ischa\BackOfficeBundle\Entity\Galerie $galery
     *
     * @return Coiffure
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
}
