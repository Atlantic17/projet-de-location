<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeArticleSeeder::class);
        $this->call(DureeLocationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(StatutLocationSeeder::class);
        $this->call(PermissionSeeder::class);
        Article::factory(10)->create();
        User::factory(10)->create();
        Client::factory(1)->create();


    }
}

