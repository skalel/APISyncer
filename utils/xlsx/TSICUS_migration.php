<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsicusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TSICUS', function (Blueprint $table) {
            $table->string('DESCRCENCUS')->length(50);
            $table->integer('CODCENCUSPAI')->length(10)->default(0);
            $table->string('ATIVO')->length(1)->default('S' );
            $table->string('ANALITICO')->length(1)->default('S' );
            $table->integer('GRAU')->length(5)->default(0);
            $table->integer('CODUSURESP')->length(5)->default(0);
            $table->float('AREA')->length(126)->nullable();
            $table->integer('CODPARC')->length(10)->default(0);
            $table->integer('CODTAB')->length(5)->default(0);
            $table->datetime('DTINCLUSAO')->length(7)->nullable()->default(SYSDATE);
            $table->integer('CODUNN')->length(10)->nullable()->default(0);
            $table->float('FRACGEREN')->length(126)->nullable();
            $table->float('FRACCONT')->length(126)->nullable();
            $table->float('AREAPERM')->length(126)->nullable();
            $table->float('AREACONT')->length(126)->nullable();
            $table->float('AREAREAL')->length(126)->nullable();
            $table->integer('CODUNG')->length(10)->nullable()->default(0);
            $table->string('VEICULO')->length(1)->default('N' );
            $table->integer('CODPARCRESP')->length(10)->nullable()->default(0);
            $table->string('CALCELALURPARTEA')->length(1)->nullable();
            $table->string('AD_IDEXTERNO')->length(100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TSICUS');
    }
}