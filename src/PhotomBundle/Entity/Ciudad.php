<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="Ciudad")
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreCiudad", type="string", length=30, nullable=true)
     */
    private $nombreciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCiudad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idciudad;



    /**
     * Set nombreciudad
     *
     * @param string $nombreciudad
     *
     * @return Ciudad
     */
    public function setNombreciudad($nombreciudad)
    {
        $this->nombreciudad = $nombreciudad;

        return $this;
    }

    /**
     * Get nombreciudad
     *
     * @return string
     */
    public function getNombreciudad()
    {
        return $this->nombreciudad;
    }

    /**
     * Get idciudad
     *
     * @return integer
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }
}
