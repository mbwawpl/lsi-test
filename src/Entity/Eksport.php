<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EksportRepository")
 * @ORM\Table(name="eksport")
 */
class Eksport
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $lokal;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $uzytkownik;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $czas;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(?string $nazwa): void
    {
        $this->nazwa = $nazwa;
    }

    public function getLokal(): ?string
    {
        return $this->lokal;
    }

    public function setLokal(string $lokal): void
    {
        $this->lokal = $lokal;
    }

    public function getUzytkownik(): ?string
    {
        return $this->uzytkownik;
    }

    public function setUzytkownik(?string $uzytkownik): void
    {
        $this->uzytkownik = $uzytkownik;
    }

    public function getCzas(): \DateTime
    {
        return $this->czas;
    }

    public function getData(): ?string
    {
        return date_format($this->czas, 'Y-m-d');
    }
    
    public function getGodzina(): ?string
    {
        return date_format($this->czas, 'H:i:s');s;
    }
    
    public function setCzas(\DateTime $czas): void
    {
        $this->czas = $czas;
    }

}
