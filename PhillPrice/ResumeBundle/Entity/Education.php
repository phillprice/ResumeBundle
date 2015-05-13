<?php
namespace PhillPrice\ResumeBundle\Entity;

class Education 
{

		protected $id;
		protected $name;
		protected $qualification;
		protected $start_date;
		protected $end_date;
		protected $graduated;
		protected $description;
		protected $url;
		protected $place;

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
     * @return Education
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
     * Set qualification
     *
     * @param string $qualification
     * @return Education
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get qualification
     *
     * @return string 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Education
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return Education
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Education
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
     * Set graduated
     *
     * @param boolean $graduated
     * @return Education
     */
    public function setGraduated($graduated)
    {
        $this->graduated = $graduated;

        return $this;
    }

    /**
     * Get graduated
     *
     * @return boolean 
     */
    public function getGraduated()
    {
        return $this->graduated;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Education
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
     * @var \PhillPrice\ResumeBundle\Entity\Place
     */
    private $Place;


    /**
     * Set Place
     *
     * @param \PhillPrice\ResumeBundle\Entity\Place $place
     * @return Education
     */
    public function setPlace(\PhillPrice\ResumeBundle\Entity\Place $place = null)
    {
        $this->Place = $place;

        return $this;
    }

    /**
     * Get Place
     *
     * @return \PhillPrice\ResumeBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->Place;
    }
}
