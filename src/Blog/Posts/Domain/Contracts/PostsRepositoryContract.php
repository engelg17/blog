<?php

namespace Blog\Posts\Domain\Contracts;

interface PostsRepositoryContract
{
    public function findAll($apiUrl): array;
}