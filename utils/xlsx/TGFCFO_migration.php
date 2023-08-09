<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgfcfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFCFO', function (Blueprint $table) {
            $table->string('DESCRCFO')->length(30);
            $table->integer('CODCTACTB')->length(10)->nullable()->default(0);
            $table->integer('GRUPOCFO')->length(5)->nullable()->default(0);
            $table->string('CONVPRODUZ')->length(1)->default('N' );
            $table->string('TRIBUTADASCIAP')->length(1)->default('N' );
            $table->string('TIPICMS')->length(1)->default('1' );
            $table->string('CALCDIFICMS')->length(1)->default('S' );
            $table->string('TIPO')->length(1)->nullable();
            $table->string('RECBRUTAEFDBLOCOP')->length(1)->default('N' );
            $table->string('COP')->length(4)->nullable();
            $table->string('PARTDIEF')->length(1)->nullable()->default('N');
            $table->string('CALCICMSCOMPL')->length(1)->default('N' );
            $table->string('TIPOPERPRODEPE')->length(1)->nullable();
            $table->string('EMPCODSIT08EFD')->length(200)->nullable();
            $table->string('MOVIMFISICA')->length(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFCFO');
    }
}