<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HostController extends AbstractController
{
    #[Route('/host', name: 'app_host_insert')]
    public function host_insert(): Response
    {
        return $this->render('host/index.html.twig', [
            'controller_name' => 'hostController',
        ]);
    }

    #[Route('/host/{slug}', methods: ["GET"], name: 'app_host_update')]
    public function host_update(): Response
    {
        return $this->render('host/index.html.twig', [
            'controller_name' => 'hostController',
        ]);
    }
}
