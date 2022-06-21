<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersPhone
{
    private $userPhone;

    public function __construct(string $userPhone = '')
    {
        $this->userPhone = $userPhone;
    }

    public function userPhone(): string
    {
        return $this->userPhone;
    }
}
