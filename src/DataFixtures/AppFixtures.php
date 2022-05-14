<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\Eksport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $this->loadEksports($manager);
    }

    private function loadEksports(ObjectManager $manager)
    {
        foreach ($this->getEksData() as [$nazwa, $lokal, $uzytkownik, $czas]) {
            $eks = new Eksport();
            $eks->setNazwa($nazwa);
            $eks->setLokal($lokal);
            $eks->setUzytkownik($uzytkownik);
            $eks->setCzas($czas);
            $manager->persist($eks);
        }

        $manager->flush();
    }

    private function getEksData()
    {
        return [
            ['Test 1', 'Lokal 1', 'Ja', new \DateTime('2022-01-01 12:00')],
            ['AAA bbb CCC', 'Lokal 2', 'Inny', new \DateTime('2022-05-01 13:00')],
            ['Test abc', 'Lokal 1', 'Tamten', new \DateTime('2022-04-01 22:00')],
            ['Qwerty', 'Lokal 3', 'Tamten', new \DateTime('2022-03-01 1:00')],
            ['a 987', 'Lokal 2', 'Ja', new \DateTime('2022-02-01 16:30')],
        ];
    }

}
