<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportarusuario
 *
 * @ORM\Table(name="ReportarUsuario", indexes={@ORM\Index(name="idContenidoReportado", columns={"idContenidoReportado"}), @ORM\Index(name="idUsuarioReportador", columns={"idUsuarioReportador"}), @ORM\Index(name="idRazonReportado", columns={"idRazonReportado"})})
 * @ORM\Entity
 */
class Reportarusuario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempoReporte", type="datetime", nullable=true)
     */
    private $tiemporeporte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aceptadoReporte", type="boolean", nullable=true)
     */
    private $aceptadoreporte;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReporte", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreporte;

    /**
     * @var \PhotomBundle\Entity\Contenido
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Contenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContenidoReportado", referencedColumnName="idContenido")
     * })
     */
    private $idcontenidoreportado;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioReportador", referencedColumnName="id")
     * })
     */
    private $idusuarioreportador;

    /**
     * @var \PhotomBundle\Entity\Razon
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Razon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRazonReportado", referencedColumnName="idRazon")
     * })
     */
    private $idrazonreportado;



    /**
     * Set tiemporeporte
     *
     * @param \DateTime $tiemporeporte
     *
     * @return Reportarusuario
     */
    public function setTiemporeporte($tiemporeporte)
    {
        $this->tiemporeporte = $tiemporeporte;

        return $this;
    }

    /**
     * Get tiemporeporte
     *
     * @return \DateTime
     */
    public function getTiemporeporte()
    {
        return $this->tiemporeporte;
    }

    /**
     * Set aceptadoreporte
     *
     * @param boolean $aceptadoreporte
     *
     * @return Reportarusuario
     */
    public function setAceptadoreporte($aceptadoreporte)
    {
        $this->aceptadoreporte = $aceptadoreporte;

        return $this;
    }

    /**
     * Get aceptadoreporte
     *
     * @return boolean
     */
    public function getAceptadoreporte()
    {
        return $this->aceptadoreporte;
    }

    /**
     * Get idreporte
     *
     * @return integer
     */
    public function getIdreporte()
    {
        return $this->idreporte;
    }

    /**
     * Set idcontenidoreportado
     *
     * @param \PhotomBundle\Entity\Contenido $idcontenidoreportado
     *
     * @return Reportarusuario
     */
    public function setIdcontenidoreportado(\PhotomBundle\Entity\Contenido $idcontenidoreportado = null)
    {
        $this->idcontenidoreportado = $idcontenidoreportado;

        return $this;
    }

    /**
     * Get idcontenidoreportado
     *
     * @return \PhotomBundle\Entity\Contenido
     */
    public function getIdcontenidoreportado()
    {
        return $this->idcontenidoreportado;
    }

    /**
     * Set idusuarioreportador
     *
     * @param \PhotomBundle\Entity\Usuario $idusuarioreportador
     *
     * @return Reportarusuario
     */
    public function setIdusuarioreportador(\PhotomBundle\Entity\Usuario $idusuarioreportador = null)
    {
        $this->idusuarioreportador = $idusuarioreportador;

        return $this;
    }

    /**
     * Get idusuarioreportador
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuarioreportador()
    {
        return $this->idusuarioreportador;
    }

    /**
     * Set idrazonreportado
     *
     * @param \PhotomBundle\Entity\Razon $idrazonreportado
     *
     * @return Reportarusuario
     */
    public function setIdrazonreportado(\PhotomBundle\Entity\Razon $idrazonreportado = null)
    {
        $this->idrazonreportado = $idrazonreportado;

        return $this;
    }

    /**
     * Get idrazonreportado
     *
     * @return \PhotomBundle\Entity\Razon
     */
    public function getIdrazonreportado()
    {
        return $this->idrazonreportado;
    }
}
