<?php

namespace Blog\Users\Application\Find;

use Blog\Users\Domain\Contracts\UsersRepositoryContract;

final class FindUsersByIdUseCase 
{

    private $repository;

    public function __construct(UsersRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(string $apiUrl, $userId): array
    {
        return $this->repository->findById($apiUrl, $userId);
    }
}
