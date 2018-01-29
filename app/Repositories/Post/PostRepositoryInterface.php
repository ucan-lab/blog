<?php

namespace App\Repositories\Post;
use App\Models\Post;

interface PostRepositoryInterface
{
    public function index();
    public function save(Post $post);
    // public function delete(Post $post);
}
