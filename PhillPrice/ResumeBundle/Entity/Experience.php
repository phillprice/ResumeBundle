<?php
namespace PhillPrice\ResumeBundle\Entity;

class Experience 
{
	
	protected $id;
	protected $job_title;
	protected $start_date;
	protected $end_date;
	protected $description;
	protected $current;
	protected $url;
	protected $place;
	
	// place relationship	

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
     * Set job_title
     *
     * @param string $jobTitle
     * @return Experience
     */
    public function setJobTitle($jobTitle)
    {
        $this->job_title = $jobTitle;

        return $this;
    }

    /**
     * Get job_title
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Experience
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
     * @return Experience
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
     * @return Experience
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
     * Set current
     *
     * @param boolean $current
     * @return Experience
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * Get current
     *
     * @return boolean 
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Experience
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
     * @return Experience
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
