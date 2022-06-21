<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersEmail
{
    private $userEmail;

    public function __construct(string $userEmail = '')
    {
        $this->userEmail = $userEmail;
    }

    public function userEmail(): string
    {
        return $this->userEmail;
    }
}
