<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */



    public function definition()
    {
        $pays=$this->faker->country;
        $ville =$this ->faker->city;

        return [
           "nom"=>$this->faker->lastName(),
           "prenom"=>$this->faker->firstName(),
           "sexe"=>array_rand(["M","F"],1),
           "dateNaissance"=>$this->faker->dateTimeBetween("1980-01-01","2001-01-30"),
           "lieuNaissance"=> "$pays,$ville",
           "nationalite"=>$this->faker->country(),
           "pays"=>$pays,
           "ville"=>$ville,
           "adresse"=>$this->faker->address(),
           "telephone1"=>$this->faker->phoneNumber(),
           "telephone2"=>$this->faker->phoneNumber(),
           "pieceIdentite"=>array_rand(["PASSPORT","CNI","PERMIS DE CONDUIRE"],1),
           "numeroPieceIdentite"=>$this->faker->creditCardNumber(),

        ];
    }
}
