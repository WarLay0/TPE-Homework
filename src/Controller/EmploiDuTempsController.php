<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmploiDuTempsController extends AbstractController
{
    #[Route('/emploidutemps', name: 'app_emploidutemps')]
    public function index(): Response
    {
        return $this->render('emploi_du_temps/index.html.twig', [
            'controller_name' => 'EmploiDuTempsController',
        ]);
    }
}
