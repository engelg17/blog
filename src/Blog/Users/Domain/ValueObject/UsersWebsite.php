<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersWebsite
{
    private $userWebsite;

    public function __construct(string $userWebsite = '')
    {
        $this->userWebsite = $userWebsite;
    }

    public function userWebsite(): string
    {
        return $this->userWebsite;
    }
}
