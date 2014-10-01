<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\PersonasRepository")
 */
class Personas
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
     * @var string
     *
     * @ORM\Column(name="tipoDocumento", type="string", length=255)
     */
    private $tipoDocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cluilCuit", type="integer")
     */
    private $cluilCuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="documento", type="integer")
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombresApellidos", type="string", length=255)
     */
    private $nombresApellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoCivil", type="string", length=1)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50)
     */
    private $provincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigoPostal", type="integer")
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;


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
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return Personas
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set cluilCuit
     *
     * @param integer $cluilCuit
     * @return Personas
     */
    public function setCluilCuit($cluilCuit)
    {
        $this->cluilCuit = $cluilCuit;

        return $this;
    }

    /**
     * Get cluilCuit
     *
     * @return integer 
     */
    public function getCluilCuit()
    {
        return $this->cluilCuit;
    }

    /**
     * Set documento
     *
     * @param integer $documento
     * @return Personas
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set nombresApellidos
     *
     * @param string $nombresApellidos
     * @return Personas
     */
    public function setNombresApellidos($nombresApellidos)
    {
        $this->nombresApellidos = $nombresApellidos;

        return $this;
    }

    /**
     * Get nombresApellidos
     *
     * @return string 
     */
    public function getNombresApellidos()
    {
        return $this->nombresApellidos;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Personas
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return Personas
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Personas
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Personas
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Personas
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     * @return Personas
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Personas
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }
}
