<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(SkillsTableSeeder::class);
        //$this->call(StudiesLevelsTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
