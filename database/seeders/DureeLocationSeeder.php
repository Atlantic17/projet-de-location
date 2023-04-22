<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DureeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_locations")->insert([
            ["libelle"=>"journee", "valeurEnHeure"=>24],
            ["libelle"=>"demi-journee", "valeurEnHeure"=>12],
        ]);
    }
}
