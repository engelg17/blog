<?php

namespace Blog\Posts\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Blog\Posts\Application\Find\FindAllPostsUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FindAllPostsController extends AbstractController
{
    private $findAllPostsUseCase;

    private $apiUrl;

    public function __construct(FindAllPostsUseCase $findAllPostsUseCase, $apiUrl)
    {
        $this->findAllPostsUseCase = $findAllPostsUseCase;
        $this->apiUrl = $apiUrl;
    }
    public function index(): JsonResponse
    {
        return new JsonResponse($this->findAllPostsUseCase->__invoke($this->apiUrl));
    }
}
