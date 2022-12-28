<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotofacilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotofacil', function (Blueprint $table) {
            $table->id();
            $table->integer('Concurso');
            $table->Date('Data');
            $table->integer('B1');
            $table->integer('B2');
            $table->integer('B3');
            $table->integer('B4');
            $table->integer('B5');
            $table->integer('B6');
            $table->integer('B7');
            $table->integer('B8');
            $table->integer('B9');
            $table->integer('B10');
            $table->integer('B11');
            $table->integer('B12');
            $table->integer('B13');
            $table->integer('B14');
            $table->integer('B15');
            $table->integer('Ganhadores');
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
        Schema::dropIfExists('lotofacil');
    }
}
