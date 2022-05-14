<?php

namespace App\Controller;

use App\Entity\Eksport;
//use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\EksportRepository;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaportController extends AbstractController
{
    /**
     * @Route("/", methods="GET", name="index")
     */
    public function index(EksportRepository $eksportRep): Response
    {
        $eksporty = $eksportRep->findBy([], ['czas' => 'ASC']);

        return $this->render('raport/index.html.twig', ['eksporty' => $eksporty]);
    }

}
