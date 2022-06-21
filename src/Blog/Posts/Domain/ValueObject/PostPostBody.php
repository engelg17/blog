<?php

namespace Blog\Posts\Domain\ValueObject;

final class PostPostBody
{
    private $postBody;

    public function __construct(string $postBody = '')
    {
        $this->postBody = $postBody;
    }

    public function postBody(): string
    {
        return $this->postBody;
    }
}
