<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Participant;
use Faker\Factory as Faker;

class ParticipantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	// instancier faker
	    $faker = Faker::create('fr_FR');

        $name = ['Lilian', 'Léa', 'Abdel', 'Khadija'];
        $categ = ['debutant','jeune talent','artiste', 'groupe'];

		// pour remplir la table, créer des objets puis les persister
	    for($i = 0; $i < 20; $i++){
		    $participant= new Participant();
		    $participant
			    ->setTypeParticipant($name[$i])
			    ->setNomParticipant($categ[$i])
		    ;
            $this->addReference("participant$i", $participant);

		    // persist : créer un enregistrement
		    $manager->persist($participant);
	    }

	    // flush : exécuter les requêtes sql
        $manager->flush();
    }
}
