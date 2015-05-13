<?php
namespace PhillPrice\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PhillPrice\ResumeBundle\Entity\Education;

class LoadEducationData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $Education = new Education();
		$Education->setName('BA (Hons) eBusiness');
        $Education->setQualification('2:1');
        $Education->setStartDate(new \DateTime('2001-09-01'));
        $Education->setEndDate(new \DateTime('2005-06-30'));
        $Education->setGraduated(true);
        $Education->setDescription('A mixture of Comupting and Business units I also took responsibility for moulding the nitis for future students.');

        $Education->setPlace($this->getReference('educationplace'));
        
        $manager->persist($Education);
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder() 
    {
        return 2; // the order in which fixtures will be loaded
    }
}