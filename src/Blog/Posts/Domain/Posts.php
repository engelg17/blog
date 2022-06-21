<?php

namespace Blog\Posts\Domain;

use Blog\Posts\Domain\ValueObject\PostPostId;
use Blog\Posts\Domain\ValueObject\PostUserId;
use Blog\Posts\Domain\ValueObject\PostPostBody;
use Blog\Posts\Domain\ValueObject\PostPostTitle;

final class Posts
{
    private $postPostBody;

    private $postPostId;

    private $postPostTitle;

    private $postUserId;

    public function __construct
    (
        PostPostBody $postPostBody,
        PostPostId $postPostId,
        PostPostTitle $postPostTitle,
        PostUserId $postUserId,
    )
    {
        $this->postPostBody = $postPostBody;
        $this->postPostId = $postPostId;
        $this->postPostTitle = $postPostTitle;
        $this->postUserId = $postUserId;
    }

    public function postPostBody(): PostPostBody
    {
        return $this->postPostBody;
    }

    public function postPostId(): PostPostId
    {
        return $this->postPostId;
    }

    public function postPostTitle(): PostPostTitle
    {
        return $this->postPostTitle;
    }

    public function postUserId(): PostUserId
    {
        return $this->postUserId;
    }
}