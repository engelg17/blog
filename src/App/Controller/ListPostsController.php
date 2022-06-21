<?php

namespace App\Controller;

use App\Services\ListPostsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListPostsController extends AbstractController
{
    private $services;

    public function __construct(ListPostsServices $services)
    {
        $this->services = $services;
    }

    #[Route('/', name: 'app_list_posts')]
    public function index(): Response
    {
        $posts = $this->services->showPosts();
        return $this->render('list_posts/index.html.twig', [
            "posts" => $posts
        ]);
    }
}
