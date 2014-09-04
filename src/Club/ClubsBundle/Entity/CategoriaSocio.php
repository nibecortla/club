<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaSocio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\CategoriaSocioRepository")
 */
class CategoriaSocio
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
     * @ORM\Column(name="categoriaDescripcion", type="string", length=255)
     */
    private $categoriaDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriaImporte", type="decimal")
     */
    private $categoriaImporte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="categoriaImporteHasta", type="date")
     */
    private $categoriaImporteHasta;


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
     * Set categoriaDescripcion
     *
     * @param string $categoriaDescripcion
     * @return CategoriaSocio
     */
    public function setCategoriaDescripcion($categoriaDescripcion)
    {
        $this->categoriaDescripcion = $categoriaDescripcion;

        return $this;
    }

    /**
     * Get categoriaDescripcion
     *
     * @return string 
     */
    public function getCategoriaDescripcion()
    {
        return $this->categoriaDescripcion;
    }

    /**
     * Set categoriaImporte
     *
     * @param string $categoriaImporte
     * @return CategoriaSocio
     */
    public function setCategoriaImporte($categoriaImporte)
    {
        $this->categoriaImporte = $categoriaImporte;

        return $this;
    }

    /**
     * Get categoriaImporte
     *
     * @return string 
     */
    public function getCategoriaImporte()
    {
        return $this->categoriaImporte;
    }

    /**
     * Set categoriaImporteHasta
     *
     * @param \DateTime $categoriaImporteHasta
     * @return CategoriaSocio
     */
    public function setCategoriaImporteHasta($categoriaImporteHasta)
    {
        $this->categoriaImporteHasta = $categoriaImporteHasta;

        return $this;
    }

    /**
     * Get categoriaImporteHasta
     *
     * @return \DateTime 
     */
    public function getCategoriaImporteHasta()
    {
        return $this->categoriaImporteHasta;
    }
}
