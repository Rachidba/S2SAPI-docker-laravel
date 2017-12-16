<?php

use Illuminate\Database\Seeder;

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
        
        User::create([
            'is_admin'  => '1',
            'email'     => 'admin@s2s.com',
            'password'  => Hash::make('password'),
            'student_id' => '1'
        ]);
    }
}
