<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\SociosRepository")
 */
class Socios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="personaId", type="integer")
     */
    private $personaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="titularId", type="integer")
     */
    private $titularId;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoriaId", type="integer")
     */
    private $categoriaId;


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
     * Set personaId
     *
     * @param integer $personaId
     * @return Socios
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId
     *
     * @return integer 
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }

    /**
     * Set titularId
     *
     * @param integer $titularId
     * @return Socios
     */
    public function setTitularId($titularId)
    {
        $this->titularId = $titularId;

        return $this;
    }

    /**
     * Get titularId
     *
     * @return integer 
     */
    public function getTitularId()
    {
        return $this->titularId;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     * @return Socios
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return integer 
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }
}
