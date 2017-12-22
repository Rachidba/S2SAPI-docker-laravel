<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Skill::truncate();

        Skill::create([
            'skill_name' => 'Anglais'
        ]);
        Skill::create([
            'skill_name' => 'Francais'
        ]);
        Skill::create([
            'skill_name' => 'Photoshop'
        ]);
        Skill::create([
            'skill_name' => 'Design'
        ]);
        Skill::create([
            'skill_name' => 'Math'
        ]);
        Skill::create([
            'skill_name' => 'Programmation'
        ]);
        Skill::create([
            'skill_name' => 'C'
        ]);
        Skill::create([
            'skill_name' => 'Bases de donnees'
        ]);
    }
}
