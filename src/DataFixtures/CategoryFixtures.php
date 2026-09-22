<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private const array NAMES = ['Backend', 'Frontend', 'Infrastructure', 'Documentation'];

    public function load(ObjectManager $manager): void
    {
        foreach (self::NAMES as $name) {
            $manager->persist(new Category($name));
        }

        $manager->flush();
    }
}
