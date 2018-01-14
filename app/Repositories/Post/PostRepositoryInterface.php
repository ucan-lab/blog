<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    /**
     * 記事一覧
     *
     * @return collection
     */
    public function index();
}
