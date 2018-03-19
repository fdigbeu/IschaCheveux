<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lieu
 *
 * @ORM\Table(name="ischa_lieu")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\LieuRepository")
 */
class Lieu
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
    * @ORM\ManyToOne(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", inversedBy="lieux", cascade={"persist"})
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $compte;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\RendezVous", mappedBy="lieu")
    */
    protected $rendezvouss;
    
    public function __construct()
    {
       $this->rendezvouss = new ArrayCollection();
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
     * @return Lieu
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
     * @return Lieu
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
     * @return Lieu
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
}
