<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Mota
 * Date: 30/12/2018
 * Time: 18:52
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMovieData extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $movie1 = new Movie();
        $movie1->setTitle("Matrix");
        $movie1->setYear(1999);
        $movie1->setTime(160);
        $movie1->setDescription("Neo is the best one");

        $manager->persist($movie1);
        $manager->flush();
    }
}