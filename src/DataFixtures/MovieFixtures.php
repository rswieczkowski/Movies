<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movie();
        $movie1->setTitle('The Dark Knight');
        $movie1->setReleaseYear(2008);
        $movie1->setDescription('This is a description of the Dark Knight');
        $movie1->setImagePath('https://cdn.pixabay.com/photo/2021/06/18/11/22/batman-6345897_960_720.jpg');

        $movie1->addActor($this->getReference('actor_1'));
        $movie1->addActor($this->getReference('actor_2'));
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Enggame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is a description of the Avengers: Endgame');
        $movie2->setImagePath('https://pixabay.com/pl/illustrations/kapitan-ameryka-m%c5%9bciciele-podziwia%c4%87-5692937/');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
