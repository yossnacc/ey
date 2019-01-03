<?php
// src/AppBundle/Entity/user.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var integer
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $CP;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroTel", type="integer", nullable=true)
     */
    private $numeroTel;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return int
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * @param int $CP
     */
    public function setCP($CP)
    {
        $this->CP = $CP;
    }

    /**
     * @return int
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param int $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return int
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * @param int $numeroTel
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="fax", type="integer",nullable=true)
     */
    private $fax;


    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return User
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
}
