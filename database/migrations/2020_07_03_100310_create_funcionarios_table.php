<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('funcionarios', function($table)
      {
          $table->increments('id');

          $table->integer('filial_id')->unsigned();
          $table->foreign('filial_id')->
              references('id')->
              on('filials')->
              onDelete('cascade');

          $table->string('nome', 100);
          $table->Date('datanascimento')->unsigned(NULL);
          $table->string('sexo', 20);
          $table->string('cpf', 15)->unique();
          $table->string('endereco', 100);
          $table->string('cargo', 40);
          $table->decimal('salario',16,2)->default(0.00);
          $table->enum('situacao',['ativo','inativo'])->default('ativo');
          $table->string('senha', 255);
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
        Schema::dropIfExists('funcionarios');
    }
}
