<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Territorios', function (Blueprint $table) {
            $table->bigIncrements('IDTerritorio');
            $table->string("DescricaoTerritorio", 50);
            $table->integer('IDRegiao')->references("IDRegiao")->on("Regiao");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('territorios');
    }
}
