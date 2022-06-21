<?php

namespace Blog\Posts\Application\Create;

use Blog\Posts\Domain\Contracts\CreatePostRepositoryContract;

final class CreatePostUseCase 
{

    private $repository;

    public function __construct(CreatePostRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(array $data): array
    {
        return $this->repository->create($data);
    }
}
