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
            'first_name' => 'Admin',
            'last_name' => '',
            'email' => 'johndoe@hotmail.com',
            'is_admin'=>'1',
            'password' => Hash::make('password'),
        ]);
    }
}
