<?php
namespace CP\CPBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\validator\Constraints as Assert;
/**
 * Media
 *
 * @ORM\Table("jeunepublicimage")
 * @ORM\Entity(repositoryClass="CP\CPBundle\Repository\JeunepublicImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class JeunepublicImage
{
    private $temp;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var \DateTime
     *
     * @ORM\COlumn(name="updated_at",type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @ORM\ManyToOne(targetEntity="CP\CPBundle\Entity\Jeunepublic", inversedBy="jeunepublicimages")
     * @ORM\JoinColumn(name="jeunepublic_id", referencedColumnName="id")
     */
    private $jeunepublic;


    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Media
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }


    /**
     * Get jeunepublic
     *
     * @return \CP\CPBundle\Entity\Jeunepublic
     */
    public function getJeunepublic()
    {
        return $this->jeunepublic;
    }

    /**
     * Set jeunepublic
     *
     * @param \CP\CPBundle\Entity\Jeunepublic $jeunepublic
     * @return JeunepublicImage
     */
    public function setJeunepublic(\CP\CPBundle\Entity\Jeunepublic $jeunepublic = null)
    {
        $this->jeunepublic = $jeunepublic;

        return $this;
    }
}
