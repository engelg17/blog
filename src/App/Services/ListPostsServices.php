<?php

namespace App\Services;

use GuzzleHttp\Client;
use Blog\Posts\Infrastructure\Controller\FindAllPostsController;

class ListPostsServices
{
    private $controller;
    public function __construct(FindAllPostsController $controller) 
    {
        $this->controller = $controller;
    }
    public function showPosts()
    {
        try {
            $response = $this->controller->index();
            $result = json_decode($response->getContent(), true);
            return $result;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}