<?php

namespace App\Controller;

use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/projets', name: 'app_project')]
    public function index(): Response
    {

        $projects = $this->entityManager->getRepository(Project::class)->findAll();

        return $this->render('project/index.html.twig', [
            'projects' => $projects
        ]);
    }
}
