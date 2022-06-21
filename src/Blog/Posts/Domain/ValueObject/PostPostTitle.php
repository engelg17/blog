<?php

namespace Blog\Posts\Domain\ValueObject;

final class PostPostTitle
{
    private $postTitle;

    public function __construct(string $postTitle= '') 
    {
        $this->postTitle = $postTitle;
    }

    public function postTitle(): string
    {
        return $this->postTitle;
    }
}
