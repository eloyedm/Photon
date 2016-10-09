<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bloqueousuario
 *
 * @ORM\Table(name="BloqueoUsuario", indexes={@ORM\Index(name="idUsuarioBloqueado", columns={"idUsuarioBloqueado"}), @ORM\Index(name="idUsuarioBloqueador", columns={"idUsuarioBloqueador"})})
 * @ORM\Entity
 */
class Bloqueousuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBloqueo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbloqueo;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioBloqueado", referencedColumnName="idUsuario")
     * })
     */
    private $idusuariobloqueado;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioBloqueador", referencedColumnName="idUsuario")
     * })
     */
    private $idusuariobloqueador;



    /**
     * Get idbloqueo
     *
     * @return integer
     */
    public function getIdbloqueo()
    {
        return $this->idbloqueo;
    }

    /**
     * Set idusuariobloqueado
     *
     * @param \PhotomBundle\Entity\Usuario $idusuariobloqueado
     *
     * @return Bloqueousuario
     */
    public function setIdusuariobloqueado(\PhotomBundle\Entity\Usuario $idusuariobloqueado = null)
    {
        $this->idusuariobloqueado = $idusuariobloqueado;

        return $this;
    }

    /**
     * Get idusuariobloqueado
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuariobloqueado()
    {
        return $this->idusuariobloqueado;
    }

    /**
     * Set idusuariobloqueador
     *
     * @param \PhotomBundle\Entity\Usuario $idusuariobloqueador
     *
     * @return Bloqueousuario
     */
    public function setIdusuariobloqueador(\PhotomBundle\Entity\Usuario $idusuariobloqueador = null)
    {
        $this->idusuariobloqueador = $idusuariobloqueador;

        return $this;
    }

    /**
     * Get idusuariobloqueador
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuariobloqueador()
    {
        return $this->idusuariobloqueador;
    }
}
