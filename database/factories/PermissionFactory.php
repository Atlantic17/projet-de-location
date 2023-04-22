<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         "nom"=>array_rand([
            "ajouter client",
            "consulter client",
           "editer client",

           "ajouter article",
           "consulter article",
           "editer article",

           "ajouter location",
           "consulter location",
           "editer location"
        ]),
        ];
    }
}
