<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name' => "mithun",
            'email' => "email@email.com",
            'password' => Hash::make("password"),
            'userTypeId' => 1
        ]);

        \App\Category::create([
            'category' => 'electronics',
            'categoryDescription' => "electronics",
            'subCategory' => "TV",
        ]);
    }
}
