<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="Pregunta")
 * @ORM\Entity
 */
class Pregunta
{
    /**
     * @var string
     *
     * @ORM\Column(name="preguntaUno", type="string", length=30, nullable=false)
     */
    private $preguntauno;

    /**
     * @var string
     *
     * @ORM\Column(name="preguntaDos", type="string", length=30, nullable=false)
     */
    private $preguntados;

    /**
     * @var string
     *
     * @ORM\Column(name="preguntaTres", type="string", length=30, nullable=false)
     */
    private $preguntatres;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPregunta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpregunta;



    /**
     * Set preguntauno
     *
     * @param string $preguntauno
     *
     * @return Pregunta
     */
    public function setPreguntauno($preguntauno)
    {
        $this->preguntauno = $preguntauno;

        return $this;
    }

    /**
     * Get preguntauno
     *
     * @return string
     */
    public function getPreguntauno()
    {
        return $this->preguntauno;
    }

    /**
     * Set preguntados
     *
     * @param string $preguntados
     *
     * @return Pregunta
     */
    public function setPreguntados($preguntados)
    {
        $this->preguntados = $preguntados;

        return $this;
    }

    /**
     * Get preguntados
     *
     * @return string
     */
    public function getPreguntados()
    {
        return $this->preguntados;
    }

    /**
     * Set preguntatres
     *
     * @param string $preguntatres
     *
     * @return Pregunta
     */
    public function setPreguntatres($preguntatres)
    {
        $this->preguntatres = $preguntatres;

        return $this;
    }

    /**
     * Get preguntatres
     *
     * @return string
     */
    public function getPreguntatres()
    {
        return $this->preguntatres;
    }

    /**
     * Get idpregunta
     *
     * @return integer
     */
    public function getIdpregunta()
    {
        return $this->idpregunta;
    }
}
