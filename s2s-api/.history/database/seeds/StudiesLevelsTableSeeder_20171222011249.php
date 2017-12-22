<?php

use Illuminate\Database\Seeder;
use App\StudiesLevel;

class StudiesLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //StudiesLevel::truncate();

        StudiesLevel::create([
            'name'  => 'Parcours : BAC + 2',
        ]);
        StudiesLevel::create([
            'name'  => 'Licences Sciences et Techniques (LST) : BAC + 3',
        ]);
        StudiesLevel::create([
            'name'  => 'Filières Ingénieur d’Etat (FI) : BAC + 5',
        ]);
        StudiesLevel::create([
            'name'  => 'Masters Sciences et Techniques (MST) : BAC+ 5',
        ]);
        StudiesLevel::create([
            'name'  => 'Doctorat',
        ]);
    }
}
