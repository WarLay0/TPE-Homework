<?php

namespace App\Controller;

use App\Repository\DevoirRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(DevoirRepository $devoirRepository): Response
    {
        $devoirs = $devoirRepository->findById(1);
        return $this->render('home/index.html.twig', [
            'devoirs' => $devoirs,
            'controller_name' => 'HomeController',
        ]);
    }
}
