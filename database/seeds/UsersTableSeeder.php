<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        foreach (range(1, 10) as $i) {
            factory(User::class, 1)->create([
                'name' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
            ]);
        }
        factory(User::class, 10)->create();
    }
}
