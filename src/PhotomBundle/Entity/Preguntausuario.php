<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preguntausuario
 *
 * @ORM\Table(name="PreguntaUsuario", indexes={@ORM\Index(name="idPregunta", columns={"idPregunta"}), @ORM\Index(name="idUsuario", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Preguntausuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPreguntaUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpreguntausuario;

    /**
     * @var \PhotomBundle\Entity\Pregunta
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPregunta", referencedColumnName="idPregunta")
     * })
     */
    private $idpregunta;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     * })
     */
    private $idusuario;



    /**
     * Get idpreguntausuario
     *
     * @return integer
     */
    public function getIdpreguntausuario()
    {
        return $this->idpreguntausuario;
    }

    /**
     * Set idpregunta
     *
     * @param \PhotomBundle\Entity\Pregunta $idpregunta
     *
     * @return Preguntausuario
     */
    public function setIdpregunta(\PhotomBundle\Entity\Pregunta $idpregunta = null)
    {
        $this->idpregunta = $idpregunta;

        return $this;
    }

    /**
     * Get idpregunta
     *
     * @return \PhotomBundle\Entity\Pregunta
     */
    public function getIdpregunta()
    {
        return $this->idpregunta;
    }

    /**
     * Set idusuario
     *
     * @param \PhotomBundle\Entity\Usuario $idusuario
     *
     * @return Preguntausuario
     */
    public function setIdusuario(\PhotomBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
