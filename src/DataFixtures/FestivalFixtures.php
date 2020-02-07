<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Festival;
use Faker\Factory as Faker;

class FestivalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	// instancier faker
	    $faker = Faker::create('fr_FR');

		// pour remplir la table, créer des objets puis les persister
	    for($i = 0; $i < 20; $i++){
		    $festival = new Festival();
		    $festival
			    ->setNomFestival($faker->text)
			    ->setImageFestival($faker->image('public/img/festival/', 800, 450, null, false))
            ;
            $this->addReference("participant$i", $festival);


		    // persist : créer un enregistrement
		    $manager->persist($festival);
	    }

	    // flush : exécuter les requêtes sql
        $manager->flush();
    }
}
