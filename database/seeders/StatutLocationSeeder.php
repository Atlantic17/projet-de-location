<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatutLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statut_locations")->insert([
            ["nom"=>"En attente"],
            ["nom"=>"En Cours"],
            ["nom"=>"Terminee"],
        ]);
    }
}
