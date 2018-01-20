<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    /**
    * @param object $post
    */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * 記事一覧
     *
     * @return collection
     */
    public function index()
    {
        return $this->post->all();
    }

    public function store($attributes)
    {
        return $this->post->create($attributes);
    }

    public function update($attributes)
    {
        return $this->post->update($attributes);
    }
}
