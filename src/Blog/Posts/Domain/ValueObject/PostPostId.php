<?php

namespace Blog\Posts\Domain\ValueObject;

final class PostPostId
{
    private $postId;

    public function __construct(int $postId = 0) 
    {
        $this->postId = $postId;
    }

    public function postId(): int
    {
        return $this->postId;
    }
}
