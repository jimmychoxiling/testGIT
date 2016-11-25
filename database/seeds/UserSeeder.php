<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('security.users')->insert([
            'first' => 'admin',
            'last' => 'istrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('p@ssw0rds'),
        ]);
    }
}
