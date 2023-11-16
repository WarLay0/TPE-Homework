<?php

namespace App\Controller;

use App\Repository\DevoirRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevoirsController extends AbstractController
{
    #[Route('/devoirs', name: 'app_devoirs')]
    public function index(DevoirRepository $devoirRepository): Response
    {
        $devoirs = $devoirRepository->findAll();
        return $this->render('devoirs/index.html.twig', [
            'devoirs' => $devoirs,
            'controller_name' => 'DevoirsController',
        ]);
    }
}
