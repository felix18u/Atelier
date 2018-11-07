<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffretTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffret', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255)->nullable(false);
            $table->date('date')->nullable(true);
            $table->string('etat',255)->nullable(false);
            $table->decimal('montantTotal', 5, 2)->nullable(true);
            $table->text('message')->nullable(true);
            $table->text('remerciement')->nullable(true);
            $table->string('url', 255)->nullable(true);
            $table->integer('paiement_id')->nullable(false)->unsigned();
            $table->integer('users_id')->nullable(false)->unsigned();
            $table->engine = 'InnoDB';
        });
        Schema::table('coffret', function(Blueprint $table) {
            $table->foreign('paiement_id')->references('id')->on('paiement');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffret');
    }
}
