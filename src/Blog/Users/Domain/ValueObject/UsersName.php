<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersName
{
    private $userName;

    public function __construct(string $userName = '')
    {
        $this->userName = $userName;
    }

    public function userName(): string
    {
        return $this->userName;
    }
}
