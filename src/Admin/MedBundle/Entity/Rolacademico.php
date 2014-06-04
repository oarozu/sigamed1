<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="rol_academico")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\RolacademicoRepository")
 */
class Rolacademico{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
     */
 protected $id;
 
  /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
protected $nombre;

 /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
protected $categoria;

/**
 * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\actividadrol", mappedBy="rol")
 */
protected $actividades;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Rolacademico
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Rolacademico
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividades = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add actividades
     *
     * @param \Admin\MedBundle\Entity\actividadrol $actividades
     * @return Rolacademico
     */
    public function addActividade(\Admin\MedBundle\Entity\actividadrol $actividades)
    {
        $this->actividades[] = $actividades;

        return $this;
    }

    /**
     * Remove actividades
     *
     * @param \Admin\MedBundle\Entity\actividadrol $actividades
     */
    public function removeActividade(\Admin\MedBundle\Entity\actividadrol $actividades)
    {
        $this->actividades->removeElement($actividades);
    }

    /**
     * Get actividades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividades()
    {
        return $this->actividades;
    }
}
