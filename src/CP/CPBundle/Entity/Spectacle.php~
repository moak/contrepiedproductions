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
 * @ORM\Table(name="spectacle")
 * @ORM\Entity(repositoryClass="CP\CPBundle\Repository\SpectacleRepository")
 */
class Spectacle
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
     * @ORM\OneToOne(targetEntity="CP\CPBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_second", type="string", length=255)
     */
    private $titleSecond;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description_short", type="string", length=500)
     */
    private $descriptionShort;

    /**
     * @var string
     *
     * @ORM\Column(name="description_long", type="string", length=2000, nullable=true)
     */
    private $descriptionLong;


    /**
     * @var string
     *
     * @ORM\Column(name="video1", type="string", length=255, nullable=true)
     */
    private $video1;

    /**
     * @var string
     *
     * @ORM\Column(name="video2", type="string", length=255, nullable=true)
     */
    private $video2;

    /**
     * @var string
     *
     * @ORM\Column(name="video3", type="string", length=255, nullable=true)
     */
    private $video3;


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
     * @return Spectacle
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
     * @return Spectacle
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
     * Set prix
     *
     * @param integer $prix
     * @return Spectacle
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set descriptionShort
     *
     * @param string $descriptionShort
     * @return Spectacle
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;

        return $this;
    }

    /**
     * Get descriptionShort
     *
     * @return string 
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * Set descriptionLong
     *
     * @param string $descriptionLong
     * @return Spectacle
     */
    public function setDescriptionLong($descriptionLong)
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    /**
     * Get descriptionLong
     *
     * @return string 
     */
    public function getDescriptionLong()
    {
        return $this->descriptionLong;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Spectacle
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Spectacle
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    public function __toString()
    {
        return $this->title;
    }


    /**
     * Set video1
     *
     * @param string $video1
     * @return Spectacle
     */
    public function setVideo1($video1)
    {
        $this->video1 = $video1;

        return $this;
    }

    /**
     * Get video1
     *
     * @return string 
     */
    public function getVideo1()
    {
        return $this->video1;
    }

    /**
     * Set video2
     *
     * @param string $video2
     * @return Spectacle
     */
    public function setVideo2($video2)
    {
        $this->video2 = $video2;

        return $this;
    }

    /**
     * Get video2
     *
     * @return string 
     */
    public function getVideo2()
    {
        return $this->video2;
    }

    /**
     * Set video3
     *
     * @param string $video3
     * @return Spectacle
     */
    public function setVideo3($video3)
    {
        $this->video3 = $video3;

        return $this;
    }

    /**
     * Get video3
     *
     * @return string 
     */
    public function getVideo3()
    {
        return $this->video3;
    }
}
