<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Razon
 *
 * @ORM\Table(name="Razon")
 * @ORM\Entity
 */
class Razon
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreRazon", type="string", length=20, nullable=false)
     */
    private $nombrerazon;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionRazon", type="string", length=50, nullable=false)
     */
    private $descripcionrazon;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRazon", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrazon;



    /**
     * Set nombrerazon
     *
     * @param string $nombrerazon
     *
     * @return Razon
     */
    public function setNombrerazon($nombrerazon)
    {
        $this->nombrerazon = $nombrerazon;

        return $this;
    }

    /**
     * Get nombrerazon
     *
     * @return string
     */
    public function getNombrerazon()
    {
        return $this->nombrerazon;
    }

    /**
     * Set descripcionrazon
     *
     * @param string $descripcionrazon
     *
     * @return Razon
     */
    public function setDescripcionrazon($descripcionrazon)
    {
        $this->descripcionrazon = $descripcionrazon;

        return $this;
    }

    /**
     * Get descripcionrazon
     *
     * @return string
     */
    public function getDescripcionrazon()
    {
        return $this->descripcionrazon;
    }

    /**
     * Get idrazon
     *
     * @return integer
     */
    public function getIdrazon()
    {
        return $this->idrazon;
    }
}
