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
        Schema::create('tgftit', function (Blueprint $table) {
          $table->integer('CODTIPTIT')->length(22)->primary();
          $table->string('DESCRTIPTIT')->length(30);
          $table->string('ESPDOC')->length(2)->nullable();
          $table->integer('CARENCIA')->length(22)->nullable();
          $table->string('FISCAL')->length(30)->nullable();
          $table->string('EXPTES')->length(1)->default('N');
          $table->integer('EXPGRS')->length(22)->default(0);
          $table->float('CARTAOTAXA')->length(22)->nullable()->default(0);
          $table->float('CARTAODESC')->length(22)->nullable()->default(0);
          $table->string('VALIDAQTDMAXTITVENCIDOS')->length(1)->default('N');
          $table->string('EXIGBAIXAACERTO')->length(1)->default('N');
          $table->string('TRANSFDIF')->length(1)->default('N');
          $table->integer('INDTIT')->length(22)->default(99);
          $table->string('TRANSFPEND')->length(1)->nullable()->default('N');
          $table->string('TRANSFBAIX')->length(1)->nullable()->default('S');
          $table->float('PERCJUROS')->length(22)->nullable();
          $table->float('PERCMULTA')->length(22)->nullable();
          $table->integer('CODMOEDA')->length(22)->nullable();
          $table->string('EXIBBAIX')->length(250)->nullable();
          $table->integer('CODCTACTB')->length(22)->nullable();
          $table->integer('CODCTACTB2')->length(22)->nullable();
          $table->integer('CODCTACTB3')->length(22)->nullable();
          $table->string('BAIXACERTO')->length(1)->default('S');
          $table->string('INFCMC7')->length(1)->default('N');
          $table->string('GRUPOLIMCRED')->length(20)->nullable();
          $table->string('FASTUSA')->length(1)->default('N');
          $table->binary('IMAGEM')->length(4000)->nullable();
          $table->float('PERCCUSVAR')->length(22)->nullable();
          $table->float('VLRCUSVAR')->length(22)->nullable();
          $table->string('FASTBAIXA')->length(1)->default('N');
          $table->integer('PRAZO')->length(22)->default(0);
          $table->integer('CODGRUPOTIPTIT')->length(22)->default(0);
          $table->string('IMPBOLRENEG')->length(1)->default('N');
          $table->string('SUBTIPOVENDA')->length(2)->default('0');
          $table->string('CONFERENCIA')->length(1)->default('N');
          $table->string('ATIVO')->length(1)->default('S');
          $table->integer('CODPARCTEF')->length(22)->default(0);
          $table->string('IMPCOMPROVANTE')->length(1)->default('N');
          $table->integer('CODRECGNRE')->length(22)->nullable();
          $table->integer('CODDETRECGNRE')->length(22)->nullable();
          $table->integer('CODPRODGNRE')->length(22)->nullable();
          $table->string('TPAGNFCE')->length(2)->nullable();
          $table->string('AJUSTAVP')->length(1)->default('N');
          $table->string('UTILIZAPOS')->length(1)->nullable()->default('N');
          $table->integer('NROPARCELAS')->length(22)->default(0);
          $table->string('INTEGRAECONECT')->length(1)->default('N');
          $table->integer('CODFINALIZADORA')->length(22)->nullable();
          $table->integer('GRUPOFINALIZADORA')->length(22)->nullable();
          $table->string('CODBANDEIRAECONECT')->length(32)->nullable();
          $table->string('CONVENIOECONECT')->length(1)->default('N');
          $table->integer('DIAVENC')->length(22)->nullable();
          $table->string('TIPVENC')->length(1)->nullable();
          $table->string('OPERACAOCTF')->length(3)->nullable();
          $table->integer('QTDPARCELCTF')->length(22)->nullable();
          $table->string('RECEBANTAPROV')->length(1)->nullable();
          $table->string('ARREDPRIMEIRAPARC')->length(1)->nullable();
          $table->string('TRUNCPARCELA')->length(1)->nullable();
          $table->string('TIMUSADOLOCACAO')->length(1)->nullable();
          $table->string('PROIBIMPBOL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgftit');
    }
};
