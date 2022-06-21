<?php 

namespace Blog\Users\Domain\Contracts;

interface UsersRepositoryContract
{
    public function findById($apiUrl, $userId): array;
}
