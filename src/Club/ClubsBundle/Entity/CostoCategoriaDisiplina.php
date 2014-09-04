<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CostoCategoriaDisiplina
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\CostoCategoriaDisiplinaRepository")
 */
class CostoCategoriaDisiplina
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
     * @ORM\Column(name="categoriaId", type="integer")
     */
    private $categoriaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="disiplinaId", type="integer")
     */
    private $disiplinaId;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriaDisiplinaCosto", type="decimal")
     */
    private $categoriaDisiplinaCosto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="costoHasta", type="date")
     */
    private $costoHasta;


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
     * Set categoriaId
     *
     * @param integer $categoriaId
     * @return CostoCategoriaDisiplina
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

    /**
     * Set disiplinaId
     *
     * @param integer $disiplinaId
     * @return CostoCategoriaDisiplina
     */
    public function setDisiplinaId($disiplinaId)
    {
        $this->disiplinaId = $disiplinaId;

        return $this;
    }

    /**
     * Get disiplinaId
     *
     * @return integer 
     */
    public function getDisiplinaId()
    {
        return $this->disiplinaId;
    }

    /**
     * Set categoriaDisiplinaCosto
     *
     * @param string $categoriaDisiplinaCosto
     * @return CostoCategoriaDisiplina
     */
    public function setCategoriaDisiplinaCosto($categoriaDisiplinaCosto)
    {
        $this->categoriaDisiplinaCosto = $categoriaDisiplinaCosto;

        return $this;
    }

    /**
     * Get categoriaDisiplinaCosto
     *
     * @return string 
     */
    public function getCategoriaDisiplinaCosto()
    {
        return $this->categoriaDisiplinaCosto;
    }

    /**
     * Set costoHasta
     *
     * @param \DateTime $costoHasta
     * @return CostoCategoriaDisiplina
     */
    public function setCostoHasta($costoHasta)
    {
        $this->costoHasta = $costoHasta;

        return $this;
    }

    /**
     * Get costoHasta
     *
     * @return \DateTime 
     */
    public function getCostoHasta()
    {
        return $this->costoHasta;
    }
}
