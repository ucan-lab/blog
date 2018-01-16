<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    /**
     * カテゴリ一覧
     *
     * @return collection
     */
    public function index();
}
