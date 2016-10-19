<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenido
 *
 * @ORM\Table(name="Contenido", indexes={@ORM\Index(name="idUsuarioContenido", columns={"idUsuarioContenido"})})
 * @ORM\Entity
 */
class Contenido
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreContenido", type="string", length=20, nullable=true)
     */
    private $nombrecontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="videoContenido", type="string", length=50, nullable=true)
     */
    private $videocontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionContenido", type="string", length=140, nullable=false)
     */
    private $descripcioncontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenContenido", type="blob", length=16777215, nullable=true)
     */
    private $imagencontenido;

    /**
     * @var integer
     *
     * @ORM\Column(name="idContenido", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontenido;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioContenido", referencedColumnName="id")
     * })
     */
    private $idusuariocontenido;



    /**
     * Set nombrecontenido
     *
     * @param string $nombrecontenido
     *
     * @return Contenido
     */
    public function setNombrecontenido($nombrecontenido)
    {
        $this->nombrecontenido = $nombrecontenido;

        return $this;
    }

    /**
     * Get nombrecontenido
     *
     * @return string
     */
    public function getNombrecontenido()
    {
        return $this->nombrecontenido;
    }

    /**
     * Set videocontenido
     *
     * @param string $videocontenido
     *
     * @return Contenido
     */
    public function setVideocontenido($videocontenido)
    {
        $this->videocontenido = $videocontenido;

        return $this;
    }

    /**
     * Get videocontenido
     *
     * @return string
     */
    public function getVideocontenido()
    {
        return $this->videocontenido;
    }

    /**
     * Set descripcioncontenido
     *
     * @param string $descripcioncontenido
     *
     * @return Contenido
     */
    public function setDescripcioncontenido($descripcioncontenido)
    {
        $this->descripcioncontenido = $descripcioncontenido;

        return $this;
    }

    /**
     * Get descripcioncontenido
     *
     * @return string
     */
    public function getDescripcioncontenido()
    {
        return $this->descripcioncontenido;
    }

    /**
     * Set imagencontenido
     *
     * @param string $imagencontenido
     *
     * @return Contenido
     */
    public function setImagencontenido($imagencontenido)
    {
        $this->imagencontenido = $imagencontenido;

        return $this;
    }

    /**
     * Get imagencontenido
     *
     * @return string
     */
    public function getImagencontenido()
    {
        return $this->imagencontenido;
    }

    /**
     * Get idcontenido
     *
     * @return integer
     */
    public function getIdcontenido()
    {
        return $this->idcontenido;
    }

    /**
     * Set idusuariocontenido
     *
     * @param \PhotomBundle\Entity\Usuario $idusuariocontenido
     *
     * @return Contenido
     */
    public function setIdusuariocontenido(\PhotomBundle\Entity\Usuario $idusuariocontenido = null)
    {
        $this->idusuariocontenido = $idusuariocontenido;

        return $this;
    }

    /**
     * Get idusuariocontenido
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuariocontenido()
    {
        return $this->idusuariocontenido;
    }
}
