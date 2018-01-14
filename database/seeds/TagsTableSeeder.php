<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::create(['name' => 'PHP']);
        Tag::create(['name' => 'Laravel']);
        Tag::create(['name' => 'Symfony']);
        Tag::create(['name' => 'Vue']);
        Tag::create(['name' => 'Vagrant']);
        Tag::create(['name' => 'VirtualBox']);
        Tag::create(['name' => 'Deployer']);
    }
}
