<?php
namespace PhillPrice\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PhillPrice\ResumeBundle\Entity\Place;

class LoadPlaceData extends AbstractFixture implements OrderedFixtureInterface 
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) 
    {
        $ExperiencePlace = new Place();
				$ExperiencePlace->setName('CSL Web');
				$ExperiencePlace->setDescription('CSL Web are a full service digital agency in Docklands');
				$ExperiencePlace->setAddress('64 Orchard Place, E14 0JW');
				$ExperiencePlace->setUrl('http://www.csl-web.com');

        $manager->persist($ExperiencePlace);

        $EducationPlace = new Place();
				$EducationPlace->setName('University of Portsmouth');
				$EducationPlace->setDescription('The University of Portsmouth is a university in the city of Portsmouth, England');
				$EducationPlace->setAddress('Winston Churchill Avenue, Portsmouth PO1 2UP');
				$EducationPlace->setUrl('http://www.port.ac.uk');

        $manager->persist($EducationPlace);

        $manager->flush();
        
        $this->addReference('educationplace', $EducationPlace);
        $this->addReference('experienceplace', $ExperiencePlace);
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder() 
    {
        return 1; // the order in which fixtures will be loaded
    }
}