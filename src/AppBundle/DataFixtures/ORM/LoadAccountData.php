<?php
// Auto-generated by the console command generate:doctrine:fixtures
// WARNING: Manual editing will be lost when command is run again

namespace AppBundle\DataFixtures\ORM;

use IMS\CommonBundle\Entity\Account;
use AppBundle\DataFixtures\BaseFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAccountData extends BaseFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        
        for ($i = 0; $i < 30; $i++) {
            $entity = new Account();

            $entity->setRef($this->randomPronounceableWord(1, 10));
            $entity->setName($this->randomPronounceableWord(1, 10));
            $entity->setDateAdded(new \DateTime());
            $entity->setDateUpdated(new \DateTime());
            
            $manager->persist($entity);
            $this->addReference('IMS_CommonBundle_Entity_Account'.$i, $entity);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 12;
    }

}