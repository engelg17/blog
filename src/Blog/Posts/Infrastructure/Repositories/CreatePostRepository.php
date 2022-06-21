<?php

namespace Blog\Posts\Infrastructure\Repositories;

use Blog\Posts\Domain\Contracts\CreatePostRepositoryContract;
use Blog\Posts\Domain\Posts;

final class CreatePostRepository implements CreatePostRepositoryContract 
{
    private $posts;

    public function __construct(Posts $posts) 
    {
        $this->posts = $posts;
    }

    public function create($data): array
    {
        $this->setters($data);
        try {
            $result = $this->getters();
            $sql = 'INSERT INTO post (userId, id, title, body) VALUES ('.$result['userId'].', '.$result['id'].', '.$result['title'].','.$result['body'].');';
            return [
                "query" => $sql
            ];
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    private function setters($result) {
        $this->posts->postPostBody()->__construct($result['body']);
        $this->posts->postPostId()->__construct($result['id']);
        $this->posts->postPostTitle()->__construct($result['title']);
        $this->posts->postUserId()->__construct($result['userId']);
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