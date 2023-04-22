<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"ajouter client"],
            ["nom"=>"consulter client"],
            ["nom"=>"editer client"],

            ["nom"=>"ajouter location"],
            ["nom"=>"consulter location"],
            ["nom"=>"editer location"],

            ["nom"=>"ajouter article"],
            ["nom"=>"consulter article"],
            ["nom"=>"editer article"],

        ]);
    }
}
