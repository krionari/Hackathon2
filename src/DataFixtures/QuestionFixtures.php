<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $user = new User();
       $user->setUsername('admin');
       $user->setPassword('admin');
       $user->setRoles(['ROLE_ADMIN']);
       $manager->persist($user);

        $manager->flush();
    }
}
