<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_ibge');
            $table->string('nome');
            $table->float('latitude');
            $table->float('longitude');
            $table->boolean('capital');
            $table->integer('estado_id');
            $table->timestamps();

            $table->foreign('estado_id')
                ->references('id')
                ->on('estados')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
