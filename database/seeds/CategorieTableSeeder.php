<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie')->insert([
            'nom' => 'Attention',
        ]);
        DB::table('categorie')->insert([
            'nom' => 'Activité',
        ]);
        DB::table('categorie')->insert([
            'nom' => 'Restauration',
        ]);
        DB::table('categorie')->insert([
            'nom' => 'Hébergement',
        ]);
    }
}
