<?php

namespace App\Controller;

use App\Services\DetailsPostsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsPostsController extends AbstractController
{
    private $services;

    public function __construct(DetailsPostsServices $services)
    {
        $this->services = $services;
    }

    #[Route('/details/{userId}/{title}/{body}', name: 'app_details_posts')]
    public function index(int $userId, string $title, string $body): Response
    {
        $data = $this->services->showDetailPost($userId, $title, $body);
        return $this->render('details_posts/index.html.twig', [
            'data' => $data,
        ]);
    }
}
