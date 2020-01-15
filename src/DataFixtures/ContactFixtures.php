<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contact = new Contact();
        $contact->setPhone("0243785462");
        $manager->persist($contact);
        $contact->setPhoneEmergency("0243785443");
        $manager->persist($contact);
        $contact->setEmail("contact@salutem.fr");
        $manager->persist($contact);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
