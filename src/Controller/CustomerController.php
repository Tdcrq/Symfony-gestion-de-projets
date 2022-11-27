<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'app_customer_insert')]
    public function customer_insert(): Response
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'customerController',
        ]);
    }

    #[Route('/customer/{slug}', name: 'app_customer_update')]
    public function customer_update(): Response
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'customerController',
        ]);
    }
}
