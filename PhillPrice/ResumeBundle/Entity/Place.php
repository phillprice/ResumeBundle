<?php
namespace PhillPrice\ResumeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
class Place 
{
	
		protected $id;
		protected $name;
		protected $description;
		protected $address;
		protected $latitude;
		protected $longitude;
		protected $url;
		protected $experiences;


		//image and foreign keys

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
    }
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
     * Set name
     *
     * @param string $name
     * @return Place
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Place
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Place
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Place
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Place
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $educations;


    /**
     * Add experiences
     *
     * @param \PhillPrice\ResumeBundle\Entity\Experience $experiences
     * @return Place
     */
    public function addExperience(\PhillPrice\ResumeBundle\Entity\Experience $experiences)
    {
        $this->experiences[] = $experiences;

        return $this;
    }

    /**
     * Remove experiences
     *
     * @param \PhillPrice\ResumeBundle\Entity\Experience $experiences
     */
    public function removeExperience(\PhillPrice\ResumeBundle\Entity\Experience $experiences)
    {
        $this->experiences->removeElement($experiences);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Add educations
     *
     * @param \PhillPrice\ResumeBundle\Entity\Education $educations
     * @return Place
     */
    public function addEducation(\PhillPrice\ResumeBundle\Entity\Education $educations)
    {
        $this->educations[] = $educations;

        return $this;
    }

    /**
     * Remove educations
     *
     * @param \PhillPrice\ResumeBundle\Entity\Education $educations
     */
    public function removeEducation(\PhillPrice\ResumeBundle\Entity\Education $educations)
    {
        $this->educations->removeElement($educations);
    }

    /**
     * Get educations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEducations()
    {
        return $this->educations;
    }
}
