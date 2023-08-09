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
        Schema::create('tsicta', function (Blueprint $table) {
          $table->integer('CODCTABCOINT')->length(22)->primary();
          $table->string('CODCTABCO')->length(14)->nullable();
          $table->string('DESCRICAO')->length(40)->nullable();
          $table->integer('CODBCO')->length(22)->nullable();
          $table->string('CODAGE')->length(5)->nullable();
          $table->integer('CODEMP')->length(22)->nullable();
          $table->string('CLASSE')->length(1)->nullable();
          $table->integer('CARTEIRA')->length(22)->nullable();
          $table->integer('SEQREM')->length(22)->nullable();
          $table->integer('REMBCO')->length(22)->nullable();
          $table->integer('REMFINAL')->length(22)->nullable();
          $table->integer('CONVENIO')->length(22)->nullable();
          $table->integer('INSTRUCAOI')->length(22)->nullable();
          $table->integer('INSTRUCAOII')->length(22)->nullable();
          $table->integer('DIASPROT')->length(22)->nullable();
          $table->string('EMITEBOLETA')->length(1)->default('S');
          $table->string('IMPBOLETA')->length(32)->nullable();
          $table->integer('MODBOLETA')->length(22)->nullable();
          $table->integer('CODCTACTB')->length(22)->nullable();
          $table->string('EXCLUSIVA')->length(1)->default('S');
          $table->string('ATIVA')->length(1)->default('S');
          $table->integer('NUMCHEQ')->length(22)->nullable();
          $table->string('CTADEFEMIBOL')->length(1)->nullable()->default('N');
          $table->float('VLRMINBOLETA')->length(22)->nullable();
          $table->integer('CTAMINBOLETA')->length(22)->nullable();
          $table->float('TAXA')->length(22)->nullable();
          $table->integer('CODPARC')->length(22)->default(0);
          $table->string('TIPOIMPRESSORA')->length(1)->default('1');
          $table->integer('CODOPEREXCL')->length(22)->default(0);
          $table->date('DTALTER')->length(7)->nullable()->format('d/m/Y');
          $table->date('DTIMPLANT')->length(7)->nullable()->format('d/m/Y');
          $table->float('SALDOBCO')->length(22)->nullable();
          $table->float('SALDOREAL')->length(22)->nullable();
          $table->integer('CODMOEDA')->length(22)->default(0);
          $table->integer('CODUSU')->length(22)->nullable()->default(0);
          $table->integer('REMBCOMAX')->length(22)->nullable();
          $table->string('ZERARAUT')->length(1)->default('N');
          $table->integer('CODCTABCOINTREM')->length(22)->nullable();
          $table->integer('SEQREM2')->length(22)->nullable();
          $table->integer('REMFINAL2')->length(22)->nullable();
          $table->integer('NURFEMODCHEQG')->length(22)->nullable();
          $table->integer('CODCORRBCO')->length(22)->nullable();
          $table->integer('NUCONTRATO')->length(22)->nullable();
          $table->integer('MODALIDADE')->length(22)->nullable();
          $table->integer('CATEGLANCHQ')->length(22)->nullable();
          $table->string('CAMPOLIVRE')->length(25)->nullable();
          $table->string('NOSSONUMERO')->length(25)->nullable();
          $table->string('MULTIPNOSSONUM')->length(25)->nullable();
          $table->string('TIPMULTIPSOMA')->length(1)->default('T');
          $table->string('TIPMODNOSSNUM')->length(1)->default('O');
          $table->string('SUBRESTMODULO')->length(1)->default('N');
          $table->integer('RESTOSUBST1')->length(22)->nullable();
          $table->integer('RESTOSUBST2')->length(22)->nullable();
          $table->integer('RESTOSUBST3')->length(22)->nullable();
          $table->string('DIGITOSUBST1')->length(1)->nullable();
          $table->string('DIGITOSUBST2')->length(1)->nullable();
          $table->string('DIGITOSUBST3')->length(1)->nullable();
          $table->string('NOSSONUMATIVO')->length(1)->default('N');
          $table->string('LINHADIGATIVO')->length(1)->default('N');
          $table->integer('NUMCLIENTE')->length(22)->nullable();
          $table->string('IDCLIENTE')->length(30)->nullable();
          $table->integer('CODAGEBENEF')->length(22)->nullable();
          $table->integer('CODCTABENEF')->length(22)->nullable();
          $table->integer('CODCTABAIXA')->length(22)->nullable();
          $table->string('PJBCRED')->length(80)->nullable();
          $table->string('PJBCHAVE')->length(80)->nullable();
          $table->string('BJBBAIBOLPAG')->length(1)->nullable();
          $table->string('PJBCONBAIXCRED')->length(1)->nullable();
          $table->integer('CODLANCBAIXABOLRAP')->length(22)->nullable();
          $table->integer('CODTIPOPERBAIXABOLRAP')->length(22)->nullable();
          $table->string('TIPOBOLETO')->length(1)->nullable();
          $table->string('TIPOAPIBOLETO')->nullable();
          $table->string('RECEBIMENTOPARCIAL')->nullable();
          $table->integer('RECEBIMENTODIAS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsicta');
    }
};
