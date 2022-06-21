<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersUserName
{
    private $userUserName;

    public function __construct(string $userUserName = '')
    {
        $this->userUserName = $userUserName;
    }

    public function userUserName(): string
    {
        return $this->userUserName;
    }
}
