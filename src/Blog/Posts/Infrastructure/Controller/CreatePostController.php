<?php

namespace Blog\Posts\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Blog\Posts\Application\Create\CreatePostUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreatePostController extends AbstractController
{
    private $createPostUseCase;

    private $apiUrl;

    public function __construct(CreatePostUseCase $createPostUseCase, $apiUrl)
    {
        $this->createPostUseCase = $createPostUseCase;
        $this->apiUrl = $apiUrl;
    }
    public function index(Request $request): JsonResponse
    {
        $data = [
            "id" => $request->get("id"),
            "userId" => $request->get("userId"),
            "title" => $request->get("title"),
            "body" => $request->get("body"),
        ];
        return new JsonResponse($this->createPostUseCase->__invoke($data));
    }
}
