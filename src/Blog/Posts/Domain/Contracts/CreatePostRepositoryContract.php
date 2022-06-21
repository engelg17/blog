<?php

namespace Blog\Posts\Domain\Contracts;

interface CreatePostRepositoryContract
{
    public function create($data): array;
}