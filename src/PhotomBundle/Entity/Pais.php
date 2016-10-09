<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="Pais", indexes={@ORM\Index(name="idCiudadPais", columns={"idCiudadPais"})})
 * @ORM\Entity
 */
class Pais
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombrePais", type="string", length=20, nullable=true)
     */
    private $nombrepais;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPais", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpais;

    /**
     * @var \PhotomBundle\Entity\Ciudad
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCiudadPais", referencedColumnName="idCiudad")
     * })
     */
    private $idciudadpais;



    /**
     * Set nombrepais
     *
     * @param string $nombrepais
     *
     * @return Pais
     */
    public function setNombrepais($nombrepais)
    {
        $this->nombrepais = $nombrepais;

        return $this;
    }

    /**
     * Get nombrepais
     *
     * @return string
     */
    public function getNombrepais()
    {
        return $this->nombrepais;
    }

    /**
     * Get idpais
     *
     * @return integer
     */
    public function getIdpais()
    {
        return $this->idpais;
    }

    /**
     * Set idciudadpais
     *
     * @param \PhotomBundle\Entity\Ciudad $idciudadpais
     *
     * @return Pais
     */
    public function setIdciudadpais(\PhotomBundle\Entity\Ciudad $idciudadpais = null)
    {
        $this->idciudadpais = $idciudadpais;

        return $this;
    }

    /**
     * Get idciudadpais
     *
     * @return \PhotomBundle\Entity\Ciudad
     */
    public function getIdciudadpais()
    {
        return $this->idciudadpais;
    }
}
