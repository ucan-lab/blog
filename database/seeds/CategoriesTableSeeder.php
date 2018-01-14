<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create(['name' => '未設定']);
        Category::create(['name' => '環境構築']);
        Category::create(['name' => 'サーバーサイド']);
        Category::create(['name' => 'フロントエンド']);
        Category::create(['name' => 'テスト']);
        Category::create(['name' => 'その他']);
    }
}
