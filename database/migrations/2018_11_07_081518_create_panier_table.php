<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->integer('id_coffret')->nullable(false)->unsigned();
            $table->integer('id_prestation')->nullable(false)->unsigned();
            $table->engine = 'InnoDB';
        });

        Schema::table('panier', function(Blueprint $table) {
            $table->foreign('id_coffret')->references('id')->on('coffret');
            $table->foreign('id_prestation')->references('id')->on('prestation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier');
    }
}
