<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255)->nullable(false);
            $table->text('descr')->nullable(false);
            $table->integer('cat_id')->nullable(false)->unsigned();
            $table->string('img', 255)->nullable(false);
            $table->decimal('prix', 5, 2)->nullable(false);
            $table->boolean('actif')->default(true)->nullable(false);
            $table->engine = 'InnoDB';
        });

        Schema::table('prestation', function(Blueprint $table) {
            $table->foreign('cat_id')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestation');
    }
}
