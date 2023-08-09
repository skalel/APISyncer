<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgfvenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFVEN', function (Blueprint $table) {
            $table->float('ACRESCMAX')->length(126)->nullable();
            $table->string('AD_IDEXTERNO')->length(100)->nullable();
            $table->string('APELIDO')->length(15);
            $table->string('ATIVO')->length(1)->default('S' );
            $table->string('ATUACOMPRADOR')->length(1)->nullable()->default('N');
            $table->integer('CODCARGAHOR')->length(5)->default(0);
            $table->integer('CODCENCUSPAD')->length(10)->default(0);
            $table->integer('CODEMP')->length(5)->nullable()->default(0);
            $table->integer('CODFORM')->length(5)->default(0);
            $table->integer('CODFORMFLEX')->length(10)->nullable()->default(0);
            $table->integer('CODFUNC')->length(10)->nullable()->default(0);
            $table->integer('CODGER')->length(5)->default(0);
            $table->integer('CODPARC')->length(10)->default(0);
            $table->integer('CODREG')->length(10)->default(0);
            $table->integer('CODUSU')->length(5)->nullable()->default(0);
            $table->string('COMCM')->length(1)->default('N' );
            $table->float('COMGER')->length(126)->nullable();
            $table->float('COMISSAO2')->length(126)->nullable();
            $table->float('COMVENDA')->length(126)->nullable();
            $table->float('DESCMAX')->length(126)->nullable();
            $table->integer('DIACOM')->length(5)->nullable()->default(0);
            $table->datetime('DTALTER')->length(7);
            $table->string('EMAIL')->length(80)->nullable();
            $table->string('GRUPODESCVEND')->length(15)->nullable();
            $table->string('GRUPORETENCAO')->length(15)->nullable();
            $table->integer('NUVERSAO')->length(22)->nullable()->default(0);
            $table->float('PARTICMETA')->length(126)->nullable();
            $table->float('PERCCUSVAR')->length(126)->nullable();
            $table->float('PERCTROCA')->length(126)->default(0);
            $table->float('PROVACRESC')->length(126)->default(0);
            $table->float('PROVACRESCCAC')->length(126)->nullable();
            $table->string('RECHREXTRA')->length(1)->default('S' );
            $table->float('SALDODISP')->length(126)->default(0);
            $table->float('SALDODISPCAC')->length(126)->nullable();
            $table->integer('SENHA')->length(5)->nullable()->default(0);
            $table->string('TIPCALC')->length(1)->default('N' );
            $table->string('TIPFECHCOM')->length(1)->default('N' );
            $table->string('TIPVALOR')->length(1)->default('U' );
            $table->string('TIPVEND')->length(1)->nullable();
            $table->float('VLRHORA')->length(126)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFVEN');
    }
}