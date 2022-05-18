<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerProjectController extends AbstractController
{
    #[Route('/compte/mes-projets', name: 'app_customer_project')]
    public function index(): Response
    {
        return $this->render('customer_project/index.html.twig');
    }
}
