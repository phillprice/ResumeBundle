<?php
namespace PhillPrice\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PhillPrice\ResumeBundle\Entity\Project;

class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface 
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) 
    {
        $Project = new Project();
        $Project->setName('FMC Catering');
        $Project->setDescription('Building an event booking form for the wimbledon Championships');
        $Project->setUrl('http://www.fmccatering.co.uk');

        $manager->persist($Project);
        $manager->flush();
    }
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}