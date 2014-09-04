<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\SocioRepository")
 */
class Socio
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
     * @ORM\Column(name="socioPersonaId", type="integer")
     */
    private $socioPersonaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="socioActivoId", type="integer")
     */
    private $socioActivoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="socioDiciplinaId", type="integer")
     */
    private $socioDiciplinaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="socioEstadoId", type="integer")
     */
    private $socioEstadoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="socioAlta", type="date")
     */
    private $socioAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="socioBaja", type="date")
     */
    private $socioBaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="socioCategoriaId", type="integer")
     */
    private $socioCategoriaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="socioUsuarioId", type="integer")
     */
    private $socioUsuarioId;


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
     * Set socioPersonaId
     *
     * @param integer $socioPersonaId
     * @return Socio
     */
    public function setSocioPersonaId($socioPersonaId)
    {
        $this->socioPersonaId = $socioPersonaId;

        return $this;
    }

    /**
     * Get socioPersonaId
     *
     * @return integer 
     */
    public function getSocioPersonaId()
    {
        return $this->socioPersonaId;
    }

    /**
     * Set socioActivoId
     *
     * @param integer $socioActivoId
     * @return Socio
     */
    public function setSocioActivoId($socioActivoId)
    {
        $this->socioActivoId = $socioActivoId;

        return $this;
    }

    /**
     * Get socioActivoId
     *
     * @return integer 
     */
    public function getSocioActivoId()
    {
        return $this->socioActivoId;
    }

    /**
     * Set socioDiciplinaId
     *
     * @param integer $socioDiciplinaId
     * @return Socio
     */
    public function setSocioDiciplinaId($socioDiciplinaId)
    {
        $this->socioDiciplinaId = $socioDiciplinaId;

        return $this;
    }

    /**
     * Get socioDiciplinaId
     *
     * @return integer 
     */
    public function getSocioDiciplinaId()
    {
        return $this->socioDiciplinaId;
    }

    /**
     * Set socioEstadoId
     *
     * @param integer $socioEstadoId
     * @return Socio
     */
    public function setSocioEstadoId($socioEstadoId)
    {
        $this->socioEstadoId = $socioEstadoId;

        return $this;
    }

    /**
     * Get socioEstadoId
     *
     * @return integer 
     */
    public function getSocioEstadoId()
    {
        return $this->socioEstadoId;
    }

    /**
     * Set socioAlta
     *
     * @param \DateTime $socioAlta
     * @return Socio
     */
    public function setSocioAlta($socioAlta)
    {
        $this->socioAlta = $socioAlta;

        return $this;
    }

    /**
     * Get socioAlta
     *
     * @return \DateTime 
     */
    public function getSocioAlta()
    {
        return $this->socioAlta;
    }

    /**
     * Set socioBaja
     *
     * @param \DateTime $socioBaja
     * @return Socio
     */
    public function setSocioBaja($socioBaja)
    {
        $this->socioBaja = $socioBaja;

        return $this;
    }

    /**
     * Get socioBaja
     *
     * @return \DateTime 
     */
    public function getSocioBaja()
    {
        return $this->socioBaja;
    }

    /**
     * Set socioCategoriaId
     *
     * @param integer $socioCategoriaId
     * @return Socio
     */
    public function setSocioCategoriaId($socioCategoriaId)
    {
        $this->socioCategoriaId = $socioCategoriaId;

        return $this;
    }

    /**
     * Get socioCategoriaId
     *
     * @return integer 
     */
    public function getSocioCategoriaId()
    {
        return $this->socioCategoriaId;
    }

    /**
     * Set socioUsuarioId
     *
     * @param integer $socioUsuarioId
     * @return Socio
     */
    public function setSocioUsuarioId($socioUsuarioId)
    {
        $this->socioUsuarioId = $socioUsuarioId;

        return $this;
    }

    /**
     * Get socioUsuarioId
     *
     * @return integer 
     */
    public function getSocioUsuarioId()
    {
        return $this->socioUsuarioId;
    }
}
