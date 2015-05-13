<?php
namespace PhillPrice\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PhillPrice\ResumeBundle\Entity\Experience;

class LoadExperienceData extends AbstractFixture implements OrderedFixtureInterface 
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $Experience = new Experience();
		$Experience->setJobTitle('Technical Lead');
        $Experience->setStartDate(new \DateTime('2011-03-01'));
        $Experience->setDescription('Full Stack developer also looking after a team of developers.');
        $Experience->setCurrent(true);

        $Experience->setPlace($this->getReference('experienceplace'));
        

        $manager->persist($Experience);
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder() 
    {
        return 3; // the order in which fixtures will be loaded
    }
}