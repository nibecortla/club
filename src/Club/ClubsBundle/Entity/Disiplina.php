<?php

namespace Club\ClubsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disiplina
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Club\ClubsBundle\Entity\DisiplinaRepository")
 */
class Disiplina
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
     * @ORM\Column(name="disiplinaNombre", type="string", length=255)
     */
    private $disiplinaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="disiplinaReglamento", type="string", length=255)
     */
    private $disiplinaReglamento;


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
     * Set disiplinaNombre
     *
     * @param string $disiplinaNombre
     * @return Disiplina
     */
    public function setDisiplinaNombre($disiplinaNombre)
    {
        $this->disiplinaNombre = $disiplinaNombre;

        return $this;
    }

    /**
     * Get disiplinaNombre
     *
     * @return string 
     */
    public function getDisiplinaNombre()
    {
        return $this->disiplinaNombre;
    }

    /**
     * Set disiplinaReglamento
     *
     * @param string $disiplinaReglamento
     * @return Disiplina
     */
    public function setDisiplinaReglamento($disiplinaReglamento)
    {
        $this->disiplinaReglamento = $disiplinaReglamento;

        return $this;
    }

    /**
     * Get disiplinaReglamento
     *
     * @return string 
     */
    public function getDisiplinaReglamento()
    {
        return $this->disiplinaReglamento;
    }
}
