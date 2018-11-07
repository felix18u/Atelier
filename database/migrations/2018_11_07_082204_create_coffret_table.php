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
            $table->date('date');
            $table->string('etat',255)->nullable(false);
            $table->decimal('montantTotal', 5, 2);
            $table->text('message');
            $table->text('remerciement');
            $table->string('url', 255);
            $table->integer('paiement_id')->nullable(false)->unsigned();
            $table->foreign('paiement_id')->references('id')->on('paiement');
            $table->integer('users_id')->nullable(false)->unsigned();
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
