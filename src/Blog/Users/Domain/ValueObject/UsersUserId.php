<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersUserId
{
    private $userId;

    public function __construct(int $userId = 0)
    {
        $this->userId = $userId;
    }

    public function userId(): int
    {
        return $this->userId;
    }
}
