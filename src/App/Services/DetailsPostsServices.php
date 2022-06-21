<?php

namespace App\Services;

use GuzzleHttp\Client;
use Blog\Users\Infrastructure\Controller\FindUserByIdController;

class DetailsPostsServices
{
    private $controller;
    public function __construct(FindUserByIdController $controller) 
    {
        $this->controller = $controller;
    }
    public function showDetailPost(int $userId, string $title, string $body)
    {
        try {
            $response = $this->controller->index($userId);
            $result = json_decode($response->getContent(), true);
            $data = [
                'user' => [
                    'userId' => $result['id'],
                    'name' => $result['name'],
                    'userName' => $result['userName'],
                    'email' => $result['email'],
                    'address' => $result['address'],
                    'phone' => $result['phone'],
                    'website' => $result['website'],
                    'company' => $result['company']
                ],
                'post' => [
                    'title' => $title,
                    'body' => $body
                ]
            ];
            return $data;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}