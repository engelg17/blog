<?php

namespace Blog\Users\Infrastructure\Repositories;

use Blog\Users\Domain\Users;
use Blog\Users\Domain\Contracts\UsersRepositoryContract;
use GuzzleHttp\Client;

final class UsersRepository implements UsersRepositoryContract {

    private $client;

    private $users;

    public function __construct(Client $client, Users $users)
    {
        $this->client = $client;
        $this->users = $users;
    }

    public function findById($apiUrl, $userId): array
    {
        $url = $apiUrl.'users/'. $userId;
        try {
            $response = $this->client->request('GET', $url);
            $content = $response->getBody()->getContents();
            $result = json_decode($content);
            $this->setters($result);
            return $this->getters();
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    private function setters($result): void
    {
        $this->users->userUserId()->__construct($result->id);
        $this->users->userName()->__construct($result->name);
        $this->users->userAddress()->__construct(json_decode(json_encode($result->address), true));
        $this->users->userCompany()->__construct(json_decode(json_encode($result->company), true));
        $this->users->userUserName()->__construct($result->username);
        $this->users->userPhone()->__construct($result->phone);
        $this->users->userWebsite()->__construct($result->website);
        $this->users->userEmail()->__construct($result->email);
    }
    private function getters(): array
    {
        return [
            "id" => $this->users->userUserId()->userId(),
            "name" => $this->users->userName()->userName(),
            "userName" => $this->users->userUserName()->userUserName(),
            "email" => $this->users->userEmail()->userEmail(),
            "address" => $this->users->userAddress()->userAddress(),
            "phone" => $this->users->userPhone()->userPhone(),
            "website" => $this->users->userWebsite()->userWebsite(),
            "company" => $this->users->userCompany()->userCompany()
            
        ];
    }

}