<?php

namespace Blog\Users\Domain;

use Blog\Users\Domain\ValueObject\UsersName;
use Blog\Users\Domain\ValueObject\UsersEmail;
use Blog\Users\Domain\ValueObject\UsersPhone;
use Blog\Users\Domain\ValueObject\UsersUserId;
use Blog\Users\Domain\ValueObject\UsersAddress;
use Blog\Users\Domain\ValueObject\UsersCompany;
use Blog\Users\Domain\ValueObject\UsersWebsite;
use Blog\Users\Domain\ValueObject\UsersUserName;

final class Users
{
    private $userAddress;

    private $userCompany;

    private $userEmail;

    private $userName;

    private $userPhone;

    private $userUserId;

    private $userUserName;

    private $userWebsite;

    public function __construct
    (
        UsersAddress $userAddress,
        UsersCompany $userCompany,
        UsersEmail $userEmail,
        UsersName $userName,
        UsersPhone $userPhone,
        UsersUserId $userUserId,
        UsersUserName $userUserName,
        UsersWebsite $userWebsite
    )
    {
        $this->userAddress = $userAddress;
        $this->userCompany = $userCompany;
        $this->userEmail = $userEmail;
        $this->userName = $userName;
        $this->userPhone = $userPhone;
        $this->userUserId = $userUserId;
        $this->userUserName = $userUserName;
        $this->userWebsite = $userWebsite;
    }

    public function userAddress(): UsersAddress
    {
        return $this->userAddress;
    }

    public function userCompany(): UsersCompany
    {
        return $this->userCompany;
    }

    public function userEmail(): UsersEmail
    {
        return $this->userEmail;
    }

    public function userName(): UsersName
    {
        return $this->userName;
    }

    public function userPhone(): UsersPhone
    {
        return $this->userPhone;
    }

    public function userUserId(): UsersUserId
    {
        return $this->userUserId;
    }

    public function userUserName(): UsersUserName
    {
        return $this->userUserName;
    }

    public function userWebsite(): UsersWebsite
    {
        return $this->userWebsite;
    }
}