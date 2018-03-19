<?php

namespace Ischa\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Client
 *
 * @ORM\Table(name="ischa_client")
 * @ORM\Entity(repositoryClass="Ischa\BackOfficeBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="civilite", type="string", length=50, nullable=true)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=75, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
    * @ORM\OneToMany(targetEntity="Ischa\BackOfficeBundle\Entity\Compte", mappedBy="client")
    */
    protected $comptes;
	
	public function __construct()
    {
       $this->comptes = new ArrayCollection();
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
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Client
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Client
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Client
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
     * @return Client
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
     * Add client
     *
     * @param \Ischa\BackOfficeBundle\Entity\Client $client
     *
     * @return Client
     */
    public function addClient(\Ischa\BackOfficeBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \Ischa\BackOfficeBundle\Entity\Client $client
     */
    public function removeClient(\Ischa\BackOfficeBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     *
     * @return Client
     */
    public function addCompte(\Ischa\BackOfficeBundle\Entity\Compte $compte)
    {
        $this->comptes[] = $compte;

        return $this;
    }

    /**
     * Remove compte
     *
     * @param \Ischa\BackOfficeBundle\Entity\Compte $compte
     */
    public function removeCompte(\Ischa\BackOfficeBundle\Entity\Compte $compte)
    {
        $this->comptes->removeElement($compte);
    }

    /**
     * Get comptes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComptes()
    {
        return $this->comptes;
    }
}
