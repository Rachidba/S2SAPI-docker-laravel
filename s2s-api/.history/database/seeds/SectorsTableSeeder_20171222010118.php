<?php

use Illuminate\Database\Seeder;
use App\Sector;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::truncate();

        Sector::create([
            'name' => 'Biologie Chimie et Géologie (BCG)',
            'studies_level_id' => '1'
        ]);
        Sector::create([
            'name' => 'Mathématiques Informatique et Physique (MIP)',
            'studies_level_id' => '1'
        ]);
        Sector::create([
            'name' => 'Mathématiques Informatique (MI)',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'physique Appliquée',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Génie Mécanique(GM)',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Génie Electronique et Informatique Industrielle',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Génie de Télécommunications',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Informatique, Réseau et Multimédia',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Analyses Biologiques et Contrôle Qualité',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Technologie Biomédicale',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Techniques d’Analyses et Contrôle de Qualité (TACQ)',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Chimie Appliquée',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Génie de l’Eau et de l’Environnement (GEE)',
            'studies_level_id' => '2'
        ]);
        Sector::create([
            'name' => 'Génie Eléctrique et Télécommunications (GET)',
            'studies_level_id' => '3'
        ]);
        Sector::create([
            'name' => 'Ingénierie Logicielle et Intégration des Systèmes (ILIS)',
            'studies_level_id' => '3'
        ]);
        Sector::create([
            'name' => 'Filière Ingénieur: Génie Mathématiques et Informatique (GMI)',
            'studies_level_id' => '3'
        ]);
        Sector::create([
            'name' => 'Génie des Procédés et d\'Environnement (GPE)',
            'studies_level_id' => '3'
        ]);
        Sector::create([
            'name' => 'Génie Énergétique (GE)',
            'studies_level_id' => '3'
        ]);
        Sector::create([
            'name' => 'Management de la Qualité, de la Sécurité et de l’environnement(MQSE)',
            'studies_level_id' => '4'
        ]);
        Sector::create([
            'name' => 'Management de la qualité et sécurité des aliments (MQSA)',
            'studies_level_id' => '4'
        ]);
        Sector::create([
            'name' => 'Sciences et Gestion de l\'Environnement (SGE)',
            'studies_level_id' => '4'
        ]);
        Sector::create([
            'name' => 'Physico Chimie et Analyse des Matériaux (PCAM)',
            'studies_level_id' => '4'
        ]);
        Sector::create([
            'name' => 'Microbiologie Appliquée et Génie-Biologie',
            'studies_level_id' => '4'
        ]);
    }
}
