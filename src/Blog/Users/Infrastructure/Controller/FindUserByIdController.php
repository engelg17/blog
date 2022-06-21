<?php

namespace Blog\Users\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Blog\Users\Application\Find\FindUsersByIdUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FindUserByIdController extends AbstractController
{
    private $findUserByIdUseCase;

    private $apiUrl;

    public function __construct(FindUsersByIdUseCase $findUserByIdUseCase, $apiUrl)
    {
        $this->findUserByIdUseCase = $findUserByIdUseCase;
        $this->apiUrl = $apiUrl;
    }
    public function index($userId): JsonResponse
    {
        return new JsonResponse($this->findUserByIdUseCase->__invoke($this->apiUrl, $userId));
    }
}
