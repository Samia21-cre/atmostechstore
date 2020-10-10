<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'johndoe@hotmail.com',
            'is_admin'=>'1',
            'password' => Hash::make('password'),
        ]);
    }
}
