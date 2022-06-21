<?php

namespace Blog\Posts\Application\Find;

use Blog\Posts\Domain\Contracts\PostsRepositoryContract;

final class FindAllPostsUseCase 
{

    private $repository;

    public function __construct(PostsRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(string $apiUrl): array
    {
        return $this->repository->findAll($apiUrl);
    }
}
