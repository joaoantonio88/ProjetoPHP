<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('automovels', function($table)
      {
          $table->increments('id');

          $table->integer('filial_id')->unsigned();
          $table->foreign('filial_id')->
              references('id')->
              on('filials')->
              onDelete('cascade');

          $table->string('nome', 100);
          $table->string('ano', 4);
          $table->string('modelo', 30);
          $table->string('cor', 30);
          $table->string('numerochassis', 30);
          $table->string('categoria', 50);
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
        Schema::dropIfExists('automovels');
    }
}
