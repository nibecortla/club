<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\EstadoRepository")
 */
class Estado
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
     * @ORM\Column(name="estadoDescripcion", type="string", length=255)
     */
    private $estadoDescripcion;


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
     * Set estadoDescripcion
     *
     * @param string $estadoDescripcion
     * @return Estado
     */
    public function setEstadoDescripcion($estadoDescripcion)
    {
        $this->estadoDescripcion = $estadoDescripcion;

        return $this;
    }

    /**
     * Get estadoDescripcion
     *
     * @return string 
     */
    public function getEstadoDescripcion()
    {
        return $this->estadoDescripcion;
    }
}
