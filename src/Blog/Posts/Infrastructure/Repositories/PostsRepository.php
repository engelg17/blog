<?php

namespace Blog\Posts\Infrastructure\Repositories;

use Blog\Posts\Domain\Contracts\PostsRepositoryContract;
use Blog\Posts\Domain\Posts;
use GuzzleHttp\Client;

final class PostsRepository implements PostsRepositoryContract {

    private $client;

    private $posts;

    public function __construct(Client $client, Posts $posts) 
    {
        $this->client = $client;
        $this->posts = $posts;
    }

    public function findAll($apiUrl): array
    {
        $url = $apiUrl.'posts';
        try {
            $response = $this->client->request('GET', $url);
            $content = $response->getBody()->getContents();
            $result = json_decode($content);
            $array= [];
            foreach($result as $fila) {
                $this->setters($fila);
                $array2 = $this->getters();
            array_push($array, $array2);
            }
            return $array;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    private function setters($result) {

        $this->posts->postPostBody()->__construct($result->body);
        $this->posts->postPostId()->__construct($result->id);
        $this->posts->postPostTitle()->__construct($result->title);
        $this->posts->postUserId()->__construct($result->userId);
    }
    private function getters() {
        return [
            "id" => $this->posts->postPostId()->postId(),
            "userId" => $this->posts->postUserId()->userId(),
            "title" => $this->posts->postPostTitle()->postTitle(),
            "body" => $this->posts->postPostBody()->postBody(),
        ];
    }

}