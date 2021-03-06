<?php

namespace PhotomBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="Usuario", indexes={@ORM\Index(name="idPaisUsuario", columns={"idPaisUsuario"})})
 * @ORM\Entity
 */
class Usuario extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=50, nullable=false)
     */
    private $nombreusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoUsuario", type="string", length=20, nullable=true)
     */
    private $apellidousuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuarioUsuario", type="string", length=30, nullable=false)
     */
    private $usuariousuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contraseñaUsuario", type="string", length=20, nullable=false)
     */
    private $contraseñausuario;

    /**
     * @var string
     *
     * @ORM\Column(name="correoUsuario", type="string", length=30, nullable=false)
     */
    private $correousuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="generoUsuario", type="integer", nullable=true)
     */
    private $generousuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilioUsuario", type="string", length=30, nullable=true)
     */
    private $domiciliousuario;

    /**
     * @var string
     *
     * @ORM\Column(name="bannerUsuario", type="blob", length=16777215, nullable=true)
     */
    private $bannerusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="perfilUsuario", type="blob", length=16777215, nullable=true)
     */
    private $perfilusuario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="privacidadUsuario", type="boolean", nullable=false)
     */
    private $privacidadusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionUsuario", type="string", length=50, nullable=true)
     */
    private $descripcionusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var \PhotomBundle\Entity\Pais
     *
     * @ORM\ManyToOne(targetEntity="PhotomBundle\Entity\Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPaisUsuario", referencedColumnName="idPais")
     * })
     */
    private $idpaisusuario;



    /**
     * Set nombreusuario
     *
     * @param string $nombreusuario
     *
     * @return Usuario
     */
    public function setNombreusuario($nombreusuario)
    {
        $this->nombreusuario = $nombreusuario;

        return $this;
    }

    /**
     * Get nombreusuario
     *
     * @return string
     */
    public function getNombreusuario()
    {
        return $this->nombreusuario;
    }

    /**
     * Set apellidousuario
     *
     * @param string $apellidousuario
     *
     * @return Usuario
     */
    public function setApellidousuario($apellidousuario)
    {
        $this->apellidousuario = $apellidousuario;

        return $this;
    }

    /**
     * Get apellidousuario
     *
     * @return string
     */
    public function getApellidousuario()
    {
        return $this->apellidousuario;
    }

    /**
     * Set usuariousuario
     *
     * @param string $usuariousuario
     *
     * @return Usuario
     */
    public function setUsuariousuario($usuariousuario)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return string
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }

    /**
     * Set contraseñausuario
     *
     * @param string $contraseñausuario
     *
     * @return Usuario
     */
    public function setContraseñausuario($contraseñausuario)
    {
        $this->contraseñausuario = $contraseñausuario;

        return $this;
    }

    /**
     * Get contraseñausuario
     *
     * @return string
     */
    public function getContraseñausuario()
    {
        return $this->contraseñausuario;
    }

    /**
     * Set correousuario
     *
     * @param string $correousuario
     *
     * @return Usuario
     */
    public function setCorreousuario($correousuario)
    {
        $this->correousuario = $correousuario;

        return $this;
    }

    /**
     * Get correousuario
     *
     * @return string
     */
    public function getCorreousuario()
    {
        return $this->correousuario;
    }

    /**
     * Set generousuario
     *
     * @param integer $generousuario
     *
     * @return Usuario
     */
    public function setGenerousuario($generousuario)
    {
        $this->generousuario = $generousuario;

        return $this;
    }

    /**
     * Get generousuario
     *
     * @return integer
     */
    public function getGenerousuario()
    {
        return $this->generousuario;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Usuario
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set domiciliousuario
     *
     * @param string $domiciliousuario
     *
     * @return Usuario
     */
    public function setDomiciliousuario($domiciliousuario)
    {
        $this->domiciliousuario = $domiciliousuario;

        return $this;
    }

    /**
     * Get domiciliousuario
     *
     * @return string
     */
    public function getDomiciliousuario()
    {
        return $this->domiciliousuario;
    }

    /**
     * Set bannerusuario
     *
     * @param string $bannerusuario
     *
     * @return Usuario
     */
    public function setBannerusuario($bannerusuario)
    {
        $this->bannerusuario = $bannerusuario;

        return $this;
    }

    /**
     * Get bannerusuario
     *
     * @return string
     */
    public function getBannerusuario()
    {
        return $this->bannerusuario;
    }

    /**
     * Set perfilusuario
     *
     * @param string $perfilusuario
     *
     * @return Usuario
     */
    public function setPerfilusuario($perfilusuario)
    {
        $this->perfilusuario = $perfilusuario;

        return $this;
    }

    /**
     * Get perfilusuario
     *
     * @return string
     */
    public function getPerfilusuario()
    {
        return $this->perfilusuario;
    }

    /**
     * Set privacidadusuario
     *
     * @param boolean $privacidadusuario
     *
     * @return Usuario
     */
    public function setPrivacidadusuario($privacidadusuario)
    {
        $this->privacidadusuario = $privacidadusuario;

        return $this;
    }

    /**
     * Get privacidadusuario
     *
     * @return boolean
     */
    public function getPrivacidadusuario()
    {
        return $this->privacidadusuario;
    }

    /**
     * Set descripcionusuario
     *
     * @param string $descripcionusuario
     *
     * @return Usuario
     */
    public function setDescripcionusuario($descripcionusuario)
    {
        $this->descripcionusuario = $descripcionusuario;

        return $this;
    }

    /**
     * Get descripcionusuario
     *
     * @return string
     */
    public function getDescripcionusuario()
    {
        return $this->descripcionusuario;
    }

    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idpaisusuario
     *
     * @param \PhotomBundle\Entity\Pais $idpaisusuario
     *
     * @return Usuario
     */
    public function setIdpaisusuario(\PhotomBundle\Entity\Pais $idpaisusuario = null)
    {
        $this->idpaisusuario = $idpaisusuario;

        return $this;
    }

    /**
     * Get idpaisusuario
     *
     * @return \PhotomBundle\Entity\Pais
     */
    public function getIdpaisusuario()
    {
        return $this->idpaisusuario;
    }
}
