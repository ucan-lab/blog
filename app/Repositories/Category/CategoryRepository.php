<?php

namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $category;

    /**
    * @param object $category
    */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * カテゴリー一覧
     *
     * @return collection
     */
    public function index()
    {
        return $this->category->all();
    }
}
