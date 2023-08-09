<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgfestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFEST', function (Blueprint $table) {
            $table->integer('CODPROD')->primary()->length(10)->default(0);
            $table->integer('CODLOCAL')->primary()->length(10)->default(0);
            $table->string('CONTROLE')->primary()->length(19)->default(' ' );
            $table->integer('CODPARC')->primary()->length(10)->default(0);
            $table->string('TIPO')->primary()->length(1)->default('P' );
            $table->float('RESERVADO')->length(126)->nullable()->default(0);
            $table->float('ESTMIN')->length(126)->default(0);
            $table->float('ESTMAX')->length(126)->default(0);
            $table->string('ATIVO')->length(1)->default('S' );
            $table->string('CODBARRA')->length(25)->nullable();
            $table->datetime('DTVAL')->length(7)->nullable();
            $table->float('PERCPUREZA')->length(126)->nullable();
            $table->float('PERCGERMIN')->length(126)->nullable();
            $table->float('ESTOQUE')->length(126)->default(0);
            $table->datetime('DTFABRICACAO')->length(7)->nullable();
            $table->string('STATUSLOTE')->length(1)->default('N' );
            $table->string('MD5PAF')->length(32)->nullable();
            $table->datetime('DTENTRADA')->length(7)->nullable();
            $table->float('QTDPEDPENDEST')->length(126)->nullable();
            $table->float('WMSBLOQUEADO')->length(126)->nullable();
            $table->float('PERCVC')->length(126)->nullable();
            $table->string('CODAGREGACAO')->length(20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFEST');
    }
}