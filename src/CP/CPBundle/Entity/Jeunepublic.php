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
 * @ORM\Table(name="jeunepublic")
 * @ORM\Entity(repositoryClass="CP\CPBundle\Repository\SpectacleRepository")
 */
class Jeunepublic
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
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="CP\CPBundle\Entity\JeunepublicImage", mappedBy="jeunepublic")
     **/
    private $jeunepublicimages ;

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
     * @var integer
     *
     * @ORM\Column(name="agefrom", type="integer")
     */
    private $agefrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageto", type="integer")
     */
    private $ageto;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;


    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="description_short", type="string", length=1000)
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
     * @return Representation
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
     * @return Representation
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
     * Set agefrom
     *
     * @param integer $agefrom
     * @return Representation
     */
    public function setAgefrom($agefrom)
    {
        $this->agefrom = $agefrom;

        return $this;
    }

    /**
     * Get agefrom
     *
     * @return integer 
     */
    public function getAgefrom()
    {
        return $this->agefrom;
    }

    /**
     * Set ageto
     *
     * @param integer $ageto
     * @return Representation
     */
    public function setAgeto($ageto)
    {
        $this->ageto = $ageto;

        return $this;
    }

    /**
     * Get ageto
     *
     * @return integer 
     */
    public function getAgeto()
    {
        return $this->ageto;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Representation
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set descriptionShort
     *
     * @param string $descriptionShort
     * @return Representation
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
     * @return Representation
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
     * Set published
     *
     * @param boolean $published
     * @return Jeunepublic
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

    /**
     * Set image
     *
     * @param \CP\CPBundle\Entity\Media $image
     * @return Jeunepublic
     */
    public function setImage(\CP\CPBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \CP\CPBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    public function __toString()
    {
        return $this->title;
    }

    /**
     * Set video1
     *
     * @param string $video1
     * @return Jeunepublic
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
     * @return Jeunepublic
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
     * @return Jeunepublic
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jeunpublicimages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jeunpublicimages
     *
     * @param \CP\CPBundle\Entity\JeunepublicImage $jeunpublicimages
     * @return Jeunepublic
     */
    public function addJeunpublicimage(\CP\CPBundle\Entity\JeunepublicImage $jeunpublicimages)
    {
        $this->jeunpublicimages[] = $jeunpublicimages;

        return $this;
    }

    /**
     * Remove jeunpublicimages
     *
     * @param \CP\CPBundle\Entity\JeunepublicImage $jeunpublicimages
     */
    public function removeJeunpublicimage(\CP\CPBundle\Entity\JeunepublicImage $jeunpublicimages)
    {
        $this->jeunpublicimages->removeElement($jeunpublicimages);
    }

    /**
     * Get jeunpublicimages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJeunpublicimages()
    {
        return $this->jeunpublicimages;
    }

    /**
     * Add jeunepublicimages
     *
     * @param \CP\CPBundle\Entity\JeunepublicImage $jeunepublicimages
     * @return Jeunepublic
     */
    public function addJeunepublicimage(\CP\CPBundle\Entity\JeunepublicImage $jeunepublicimages)
    {
        $this->jeunepublicimages[] = $jeunepublicimages;

        return $this;
    }

    /**
     * Remove jeunepublicimages
     *
     * @param \CP\CPBundle\Entity\JeunepublicImage $jeunepublicimages
     */
    public function removeJeunepublicimage(\CP\CPBundle\Entity\JeunepublicImage $jeunepublicimages)
    {
        $this->jeunepublicimages->removeElement($jeunepublicimages);
    }

    /**
     * Get jeunepublicimages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJeunepublicimages()
    {
        return $this->jeunepublicimages;
    }
}
