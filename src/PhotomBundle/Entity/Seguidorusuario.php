<?php

namespace PhotomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguidorusuario
 *
 * @ORM\Table(name="SeguidorUsuario", indexes={@ORM\Index(name="idUsuarioSeguidor", columns={"idUsuarioSeguidor"}), @ORM\Index(name="idUsuarioSeguido", columns={"idUsuarioSeguido"})})
 * @ORM\Entity
 */
class Seguidorusuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aceptado", type="integer", nullable=false)
     */
    private $aceptado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSeguidorUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idseguidorusuario;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioSeguidor", referencedColumnName="id")
     * })
     */
    private $idusuarioseguidor;

    /**
     * @var \PhotomBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuarioSeguido", referencedColumnName="id")
     * })
     */
    private $idusuarioseguido;



    /**
     * Set aceptado
     *
     * @param integer $aceptado
     *
     * @return Seguidorusuario
     */
    public function setAceptado($aceptado)
    {
        $this->aceptado = $aceptado;

        return $this;
    }

    /**
     * Get aceptado
     *
     * @return integer
     */
    public function getAceptado()
    {
        return $this->aceptado;
    }

    /**
     * Get idseguidorusuario
     *
     * @return integer
     */
    public function getIdseguidorusuario()
    {
        return $this->idseguidorusuario;
    }

    /**
     * Set idusuarioseguidor
     *
     * @param \PhotomBundle\Entity\Usuario $idusuarioseguidor
     *
     * @return Seguidorusuario
     */
    public function setIdusuarioseguidor(\PhotomBundle\Entity\Usuario $idusuarioseguidor = null)
    {
        $this->idusuarioseguidor = $idusuarioseguidor;

        return $this;
    }

    /**
     * Get idusuarioseguidor
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuarioseguidor()
    {
        return $this->idusuarioseguidor;
    }

    /**
     * Set idusuarioseguido
     *
     * @param \PhotomBundle\Entity\Usuario $idusuarioseguido
     *
     * @return Seguidorusuario
     */
    public function setIdusuarioseguido(\PhotomBundle\Entity\Usuario $idusuarioseguido = null)
    {
        $this->idusuarioseguido = $idusuarioseguido;

        return $this;
    }

    /**
     * Get idusuarioseguido
     *
     * @return \PhotomBundle\Entity\Usuario
     */
    public function getIdusuarioseguido()
    {
        return $this->idusuarioseguido;
    }
}
