<?php

namespace CP\CPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Representation
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="CP\CPBundle\Repository\ApplicationRepository")
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="CP\CPBundle\Entity\Jeunepublic")
     * @ORM\JoinColumn(nullable=true)
     */
    private $jeunepublic;

    /**
     * @ORM\OneToOne(targetEntity="CP\CPBundle\Entity\Spectacle")
     * @ORM\JoinColumn(nullable=true)
     */
    private $spectacle;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="citation", type="string", length=255)
     */
    private $citation;

    /**
     * @var string
     *
     * @ORM\Column(name="title_second", type="string", length=255)
     */
    private $titleSecond;


    

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
     * Set title
     *
     * @param string $title
     * @return Application
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleSecond
     *
     * @param string $titleSecond
     * @return Application
     */
    public function setTitleSecond($titleSecond)
    {
        $this->titleSecond = $titleSecond;

        return $this;
    }

    /**
     * Get titleSecond
     *
     * @return string 
     */
    public function getTitleSecond()
    {
        return $this->titleSecond;
    }

    /**
     * Set jeunepublic
     *
     * @param \CP\CPBundle\Entity\JeunePublic $jeunepublic
     * @return Application
     */
    public function setJeunepublic(\CP\CPBundle\Entity\JeunePublic $jeunepublic = null)
    {
        $this->jeunepublic = $jeunepublic;

        return $this;
    }

    /**
     * Get jeunepublic
     *
     * @return \CP\CPBundle\Entity\JeunePublic 
     */
    public function getJeunepublic()
    {
        return $this->jeunepublic;
    }

    /**
     * Set spectacle
     *
     * @param \CP\CPBundle\Entity\Spectacle $spectacle
     * @return Application
     */
    public function setSpectacle(\CP\CPBundle\Entity\Spectacle $spectacle = null)
    {
        $this->spectacle = $spectacle;

        return $this;
    }

    /**
     * Get spectacle
     *
     * @return \CP\CPBundle\Entity\Spectacle 
     */
    public function getSpectacle()
    {
        return $this->spectacle;
    }

    /**
     * Set citation
     *
     * @param string $citation
     * @return Application
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;

        return $this;
    }

    /**
     * Get citation
     *
     * @return string 
     */
    public function getCitation()
    {
        return $this->citation;
    }
}
