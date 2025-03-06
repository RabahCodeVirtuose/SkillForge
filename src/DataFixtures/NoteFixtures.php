<?php

namespace App\DataFixtures;

use App\Entity\Atelier;
use App\Entity\Note;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class NoteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        // Récupérer tous les ateliers
        $ateliers = $manager->getRepository(Atelier::class)->findAll();

        foreach ($ateliers as $atelier) {
            // Récupérer les apprentis inscrits à cet atelier
            $inscrits = $atelier->getInscrits()->toArray();

            foreach ($inscrits as $apprenti) {
                // Créer une nouvelle note pour cet atelier
                $note = new Note();
                $note->setApprenti($apprenti);
                $note->setAtelier($atelier);
                $note->setNote($faker->randomFloat(1, 0, 5)); // Note aléatoire entre 0 et 5
                $note->setDate($faker->dateTimeThisYear());

                $manager->persist($note);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            AtelierFixtures::class, // Assure que cette fixture s'exécute après AtelierFixtures
        ];
    }
}
