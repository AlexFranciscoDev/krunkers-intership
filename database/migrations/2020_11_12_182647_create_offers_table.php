<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            // Id oferta
            $table->increments('idOffer');
            // Nombre 
            $table->string('name', 255);
            // Descripcion
            $table->text('description', 1000);
            // Ambito
            $table->string('area', 100);
            // Ciudad
            $table->string('city', 255);
            // Tipo empleo
            $table->string('typeWorkday', 50);
            // Aptitudes 
            $table->text('requirements', 1000);
            // Estado oferta
            $table->string('status', 100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            Schema::drop('offers');
        });
    }
}
