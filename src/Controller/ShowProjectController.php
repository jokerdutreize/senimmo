<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowProjectController extends AbstractController
{
    #[Route('/show/project', name: 'app_show_project')]
    public function index(): Response
    {
        return $this->render('show_project/index.html.twig');
    }
}
