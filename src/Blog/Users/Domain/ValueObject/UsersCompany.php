<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersCompany
{
    private $userCompany;

    public function __construct(array $userCompany = [])
    {
        $this->userCompany = $userCompany;
    }

    public function userCompany(): array
    {
        return $this->userCompany;
    }

    public function userNameCompany(): string
    {
        return $this->userCompany['name'];
    }

    public function userCatchPhraseCompany(): string
    {
        return $this->userCompany['catchPhrase'];
    }

    public function userbsCompany(): string
    {
        return $this->userCompany['bs'];
    }
}
