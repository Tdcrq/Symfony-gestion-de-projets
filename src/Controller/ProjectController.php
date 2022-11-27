<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/project', name: 'app_project_insert')]
    public function project_insert(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/project/{slug}', methods: ["GET"], name: 'app_project_update')]
    public function project_update(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
