<?php

namespace Blog\Users\Domain\ValueObject;

final class UsersAddress
{
    private $userAddress;

    public function __construct(array $userAddress = [])
    {
        $this->userAddress = $userAddress;
    }

    public function userAddress(): array
    {
        return $this->userAddress;
    }

    public function userStreetAddress(): string
    {
        return $this->userAddress['street'];
    }

    public function userSuiteAddress(): string
    {
        return $this->userAddress['suite'];
    }

    public function userCityAddress(): string
    {
        return $this->userAddress['city'];
    }
    
    public function userZipcodeAddress(): string
    {
        return $this->userAddress['zipcode'];
    }

    public function userGeoAddress(): array
    {
        return $this->userAddress['geo'];
    }
}
