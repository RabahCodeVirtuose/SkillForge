<?php

namespace App\DataFixtures;

use App\Entity\Atelier;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AtelierFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        // Récupérer tous les utilisateurs
        $users = $manager->getRepository(User::class)->findAll();

        // Séparer les instructeurs et les apprentis
        $instructeurs = array_filter($users, function ($user) {
            return in_array('ROLE_INSTRUCTEUR', $user->getRoles());
        });

        $apprentis = array_filter($users, function ($user) {
            return in_array('ROLE_APPRENTI', $user->getRoles());
        });

        for ($i = 1; $i <= 10; $i++) {
            $atelier = new Atelier();
            $atelier->setNom($faker->sentence)
                ->setDescription("<p>" . join("</p><p>", $faker->paragraphs(3)) . "</p>");

            // Sélectionner un instructeur aléatoire comme responsable de l'atelier
            if (!empty($instructeurs)) {
                $atelier->setInstructeur($instructeurs[array_rand($instructeurs)]);
            }

            // Ajouter des apprentis inscrits aléatoirement
            if (!empty($apprentis)) {
                $inscrits = $faker->randomElements($apprentis, mt_rand(2, 5));
                foreach ($inscrits as $user) {
                    $atelier->ajouterInscrit($user);
                }
            }

            $manager->persist($atelier);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
