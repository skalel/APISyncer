<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgmmetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGMMET', function (Blueprint $table) {
            $table->datetime('DTREF')->primary()->length(7);
            $table->integer('CODEMP')->primary()->length(5)->default(0);
            $table->integer('CODPROD')->primary()->length(10)->default(0);
            $table->integer('CODGRUPOPROD')->primary()->length(10)->default(0);
            $table->integer('CODLOCAL')->primary()->length(10)->default(0);
            $table->integer('CODPROJ')->primary()->length(10)->default(0);
            $table->integer('CODCENCUS')->primary()->length(10)->default(0);
            $table->integer('CODNAT')->primary()->length(10)->default(0);
            $table->integer('CODREG')->primary()->length(10)->default(0);
            $table->integer('CODGER')->primary()->length(5)->default(0);
            $table->integer('CODVEND')->primary()->length(5)->default(0);
            $table->integer('CODPARC')->primary()->length(10)->default(0);
            $table->integer('CODUF')->primary()->length(5)->default(0);
            $table->integer('CODCID')->primary()->length(10)->default(0);
            $table->integer('CODPAIS')->primary()->length(5)->default(0);
            $table->integer('CODTIPPARC')->primary()->length(10)->default(0);
            $table->string('CONTROLE')->primary()->length(19)->default(' ' );
            $table->string('MARCA')->primary()->length(10)->default(' ' );
            $table->integer('DIA')->primary()->length(5)->default(0);
            $table->integer('CODGRUPONAT')->primary()->length(10)->default(0);
            $table->float('QTDPREV')->length(126)->nullable()->default(0);
            $table->float('PREVREC')->length(126)->nullable()->default(0);
            $table->float('PREVDESP')->length(126)->nullable()->default(0);
            $table->float('QTDREAL')->length(126)->nullable()->default(0);
            $table->float('REALREC')->length(126)->nullable()->default(0);
            $table->float('REALDESP')->length(126)->nullable()->default(0);
            $table->float('PERCENTUAL')->length(126)->nullable()->default(0);
            $table->float('SUPLEMENTODESP')->length(126)->nullable()->default(0);
            $table->float('ANTECIPDESP')->length(126)->nullable()->default(0);
            $table->float('TRANSFDESP')->length(126)->nullable()->default(0);
            $table->float('TRANSFSALDODESP')->length(126)->nullable()->default(0);
            $table->float('REDUCAODESP')->length(126)->nullable()->default(0);
            $table->float('COMPROMISSODESP')->length(126)->nullable()->default(0);
            $table->string('ANALITICO')->length(1)->default('S' );
            $table->string('TIPOMSG')->length(1)->default('Z' );
            $table->float('PERCAVISO')->length(126)->nullable()->default(0);
            $table->integer('SEMANAMES')->length(5)->nullable()->default(0);
            $table->float('TOTALAUTINV')->length(126)->default(0);
            $table->string('CODVOL')->length(2)->nullable();
            $table->datetime('DHALTER')->length(7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGMMET');
    }
}