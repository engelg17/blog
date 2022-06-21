<?php

namespace Blog\Posts\Domain\ValueObject;

final class PostUserId
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
