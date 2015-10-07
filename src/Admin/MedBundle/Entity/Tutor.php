<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="tutor", uniqueConstraints={@ORM\UniqueConstraint(columns={"docente_id", "curso_id"})})
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\tutorlRepository")
 */
class Tutor{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;

/**
 * @ORM\Column(type="integer", nullable=true)
 */
protected $estudiantes;

/**
* @ORM\Column(type="string", length=127, nullable=true)
*/
protected $observaciones;

/** 
* @var Docente
* @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Docente", inversedBy="tutoria")
* @ORM\JoinColumn(name="docente_id", referencedColumnName="id", nullable=false)
*/
protected $docente;

/** 
* @var Curso
* @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Curso", inversedBy="tutores")
* @ORM\JoinColumn(name="curso_id", referencedColumnName="id", nullable=false)
*/
protected $curso;

/**
 * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\redTutores", mappedBy="id") 
 */
protected $coevaldirector;


/**
 * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\coevalTutor", mappedBy="tutor") 
 */
protected $coevaltutor;


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
     * Set estudiantes
     *
     * @param integer $estudiantes
     * @return Tutor
     */
    public function setEstudiantes($estudiantes)
    {
        $this->estudiantes = $estudiantes;

        return $this;
    }

    /**
     * Get estudiantes
     *
     * @return integer 
     */
    public function getEstudiantes()
    {
        return $this->estudiantes;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Tutor
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set docente
     *
     * @param \Admin\UnadBundle\Entity\Docente $docente
     * @return Tutor
     */
    public function setDocente(\Admin\UnadBundle\Entity\Docente $docente)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return \Admin\UnadBundle\Entity\Docente 
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set curso
     *
     * @param \Admin\UnadBundle\Entity\Curso $curso
     * @return Tutor
     */
    public function setCurso(\Admin\UnadBundle\Entity\Curso $curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \Admin\UnadBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set coevaldirector
     *
     * @param \Admin\MedBundle\Entity\redTurores $coevaldirector
     * @return Tutor
     */
    public function setCoevaldirector(\Admin\MedBundle\Entity\redTutores $coevaldirector = null)
    {
        $this->coevaldirector = $coevaldirector;

        return $this;
    }

    /**
     * Get coevaldirector
     *
     * @return \Admin\MedBundle\Entity\redTutores 
     */
    public function getCoevaldirector()
    {
        return $this->coevaldirector;
    }

    /**
     * Set coevaltutor
     *
     * @param \Admin\MedBundle\Entity\coevalTutor $coevaltutor
     * @return Tutor
     */
    public function setCoevaltutor(\Admin\MedBundle\Entity\coevalTutor $coevaltutor = null)
    {
        $this->coevaltutor = $coevaltutor;

        return $this;
    }

    /**
     * Get coevaltutor
     *
     * @return \Admin\MedBundle\Entity\coevalTutor 
     */
    public function getCoevaltutor()
    {
        return $this->coevaltutor;
    }
}
