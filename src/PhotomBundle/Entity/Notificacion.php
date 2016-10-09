<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificacion
 *
 * @ORM\Table(name="Notificacion", indexes={@ORM\Index(name="idContenidoNotificacion", columns={"idContenidoNotificacion"}), @ORM\Index(name="idUsuarioNotificador", columns={"idUsuarioNotificador"})})
 * @ORM\Entity
 */
class Notificacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="comentarioNotificacion", type="string", length=140, nullable=true)
     */
    private $comentarionotificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gustaNotificacion", type="boolean", nullable=true)
     */
    private $gustanotificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNotificacion", type="datetime", nullable=false)
     */
    private $fechanotificacion = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="leidaNotificacion", type="boolean", nullable=true)
     */
    private $leidanotificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idNotificacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotificacion;

    /**
     * @var \PhotomBundle\Entity\Contenido
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Contenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContenidoNotificacion", referencedColumnName="idContenido")
     * })
     */
    private $idcontenidonotificacion;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioNotificador", referencedColumnName="idUsuario")
     * })
     */
    private $idusuarionotificador;



    /**
     * Set comentarionotificacion
     *
     * @param string $comentarionotificacion
     *
     * @return Notificacion
     */
    public function setComentarionotificacion($comentarionotificacion)
    {
        $this->comentarionotificacion = $comentarionotificacion;

        return $this;
    }

    /**
     * Get comentarionotificacion
     *
     * @return string
     */
    public function getComentarionotificacion()
    {
        return $this->comentarionotificacion;
    }

    /**
     * Set gustanotificacion
     *
     * @param boolean $gustanotificacion
     *
     * @return Notificacion
     */
    public function setGustanotificacion($gustanotificacion)
    {
        $this->gustanotificacion = $gustanotificacion;

        return $this;
    }

    /**
     * Get gustanotificacion
     *
     * @return boolean
     */
    public function getGustanotificacion()
    {
        return $this->gustanotificacion;
    }

    /**
     * Set fechanotificacion
     *
     * @param \DateTime $fechanotificacion
     *
     * @return Notificacion
     */
    public function setFechanotificacion($fechanotificacion)
    {
        $this->fechanotificacion = $fechanotificacion;

        return $this;
    }

    /**
     * Get fechanotificacion
     *
     * @return \DateTime
     */
    public function getFechanotificacion()
    {
        return $this->fechanotificacion;
    }

    /**
     * Set leidanotificacion
     *
     * @param boolean $leidanotificacion
     *
     * @return Notificacion
     */
    public function setLeidanotificacion($leidanotificacion)
    {
        $this->leidanotificacion = $leidanotificacion;

        return $this;
    }

    /**
     * Get leidanotificacion
     *
     * @return boolean
     */
    public function getLeidanotificacion()
    {
        return $this->leidanotificacion;
    }

    /**
     * Get idnotificacion
     *
     * @return integer
     */
    public function getIdnotificacion()
    {
        return $this->idnotificacion;
    }

    /**
     * Set idcontenidonotificacion
     *
     * @param \PhotomBundle\Entity\Contenido $idcontenidonotificacion
     *
     * @return Notificacion
     */
    public function setIdcontenidonotificacion(\PhotomBundle\Entity\Contenido $idcontenidonotificacion = null)
    {
        $this->idcontenidonotificacion = $idcontenidonotificacion;

        return $this;
    }

    /**
     * Get idcontenidonotificacion
     *
     * @return \PhotomBundle\Entity\Contenido
     */
    public function getIdcontenidonotificacion()
    {
        return $this->idcontenidonotificacion;
    }

    /**
     * Set idusuarionotificador
     *
     * @param \PhotomBundle\Entity\Usuario $idusuarionotificador
     *
     * @return Notificacion
     */
    public function setIdusuarionotificador(\PhotomBundle\Entity\Usuario $idusuarionotificador = null)
    {
        $this->idusuarionotificador = $idusuarionotificador;

        return $this;
    }

    /**
     * Get idusuarionotificador
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuarionotificador()
    {
        return $this->idusuarionotificador;
    }
}
