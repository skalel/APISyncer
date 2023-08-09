<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tgfven', function (Blueprint $table) {
          $table->id('CODVEND')->length(22);
          $table->string('TIPVEND')->length(1)->nullable();
          $table->string('APELIDO')->length(15);
          $table->integer('CODPARC')->length(22)->default(0);
          $table->integer('CODREG')->length(22)->default(0);
          $table->float('COMVENDA')->length(22)->nullable();
          $table->float('COMGER')->length(22)->nullable();
          $table->float('PARTICMETA')->length(22)->nullable();
          $table->integer('CODEMP')->length(22)->nullable();
          $table->integer('CODFORM')->length(22)->default(0);
          $table->integer('CODGER')->length(22)->default(0);
          $table->integer('CODFUNC')->length(22)->nullable();
          $table->integer('SENHA')->length(22)->nullable();
          $table->string('ATIVO')->length(1)->default('S');
          $table->datetime('DTALTER')->length(14)->format('d/m/Y H:i:s');
          $table->string('TIPCALC')->length(1)->default('N');
          $table->integer('CODCARGAHOR')->length(22)->default(0);
          $table->integer('CODCENCUSPAD')->length(22)->default(0);
          $table->float('PERCCUSVAR')->length(22)->nullable();
          $table->string('EMAIL')->length(80)->nullable();
          $table->integer('DIACOM')->length(22)->nullable();
          $table->string('TIPVALOR')->length(1)->default('U');
          $table->integer('CODUSU')->length(22)->nullable();
          $table->float('VLRHORA')->length(22)->nullable();
          $table->float('SALDODISP')->length(22)->default(0);
          $table->float('PROVACRESC')->length(22)->default(0);
          $table->float('DESCMAX')->length(22)->nullable();
          $table->float('ACRESCMAX')->length(22)->nullable();
          $table->string('GRUPORETENCAO')->length(15)->nullable();
          $table->string('GRUPODESCVEND')->length(15)->nullable();
          $table->string('COMCM')->length(1)->default('N');
          $table->string('RECHREXTRA')->length(1)->default('S');
          $table->string('TIPFECHCOM')->length(1)->default('N');
          $table->string('ATUACOMPRADOR')->length(1)->nullable()->default('N');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfven');
    }
};
