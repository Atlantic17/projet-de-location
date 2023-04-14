<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteAticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriete_aticles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->foreignId("type_article_id")->constrained();
            $table->boolean("estObligatoire")->default(1);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propriete_articles',function(Blueprint $table){
            $table->dropForeign(["type_article_id"]);
        });
        Schema::dropIfExists('propriete_aticles');
    }
}
