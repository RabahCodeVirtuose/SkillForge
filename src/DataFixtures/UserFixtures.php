<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        // Ajout de l'administrateur
        $admin = new User();
        $admin->setEmail('admin@example.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $admin->setNom('Admin');
        $admin->setPrenom('Super');
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        // Ajout d'un apprenti pour le test
        $apprenti = new User();
        $apprenti->setEmail('apprenti@example.com');
        $apprenti->setPassword($this->passwordHasher->hashPassword($apprenti, 'apprenti123'));
        $apprenti->setNom('Dupont');
        $apprenti->setPrenom('Jean');
        $apprenti->setRoles(['ROLE_APPRENTI']);
        $manager->persist($apprenti);

        // Ajout d'un instructeur de test
        $testInstructor = new User();
        $testInstructor->setEmail('toto.titi@gmail.com');
        $testInstructor->setPassword($this->passwordHasher->hashPassword($testInstructor, 'tototiti'));
        $testInstructor->setNom('Toto');
        $testInstructor->setPrenom('Titi');
        $testInstructor->setRoles(['ROLE_INSTRUCTEUR']);
        $manager->persist($testInstructor);
        $this->addReference('instructeur_1', $testInstructor);

        // Génération de 5 instructeurs aléatoires
        for ($i = 2; $i <= 6; $i++) {
            $instructeur = new User();
            $instructeur->setEmail($faker->unique()->email);
            $instructeur->setPassword($this->passwordHasher->hashPassword($instructeur, 'password'));
            $instructeur->setNom($faker->lastName);
            $instructeur->setPrenom($faker->firstName);
            $instructeur->setRoles(['ROLE_INSTRUCTEUR']);

            $manager->persist($instructeur);
            $this->addReference('instructeur_' . $i, $instructeur);
        }

        // Génération de 10 apprentis
        for ($i = 1; $i <= 10; $i++) {
            $apprenti = new User();
            $apprenti->setEmail($faker->unique()->email);
            $apprenti->setPassword($this->passwordHasher->hashPassword($apprenti, 'password'));
            $apprenti->setNom($faker->lastName);
            $apprenti->setPrenom($faker->firstName);
            $apprenti->setRoles(['ROLE_APPRENTI']);

            $manager->persist($apprenti);
            $this->addReference('apprenti_' . $i, $apprenti);
        }

        $manager->flush(); // Sauvegarde des utilisateurs en base
    }
}
