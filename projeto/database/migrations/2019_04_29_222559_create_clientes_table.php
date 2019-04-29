<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->bigIncrements('IDCliente');
            $table->string('NomeCompanhia', 40);
            $table->string('NomeContato', 30)->nullable();
            $table->string('TituloContato', 30)->nullable();
            $table->string('Endereco', 60)->nullable();
            $table->string('Cidade', 15)->nullable();
            $table->string('Regiao', 15)->nullable();
            $table->string('CEP', 10)->nullable();
            $table->string('Pais', 15)->nullable();
            $table->string('Telefone', 24)->nullable();
            $table->string('Fax', 24)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
