<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgftitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFTIT', function (Blueprint $table) {
            $table->string('DESCRTIPTIT')->length(30);
            $table->string('ESPDOC')->length(2)->nullable();
            $table->integer('CARENCIA')->length(5)->nullable()->default(0);
            $table->string('FISCAL')->length(30)->nullable();
            $table->string('EXPTES')->length(1)->default('N' );
            $table->integer('EXPGRS')->length(5)->default(0);
            $table->float('CARTAOTAXA')->length(126)->nullable()->default(0);
            $table->float('CARTAODESC')->length(126)->nullable()->default(0);
            $table->string('VALIDAQTDMAXTITVENCIDOS')->length(1)->default('N' );
            $table->string('EXIGBAIXAACERTO')->length(1)->default('N' );
            $table->string('TRANSFDIF')->length(1)->default('N' );
            $table->integer('INDTIT')->length(5)->default(99);
            $table->string('TRANSFPEND')->length(1)->nullable()->default('N');
            $table->string('TRANSFBAIX')->length(1)->nullable()->default('S');
            $table->float('PERCJUROS')->length(126)->nullable();
            $table->float('PERCMULTA')->length(126)->nullable();
            $table->integer('CODMOEDA')->length(5)->nullable()->default(0);
            $table->string('EXIBBAIX')->length(250)->nullable();
            $table->integer('CODCTACTB')->length(10)->nullable()->default(0);
            $table->integer('CODCTACTB2')->length(10)->nullable()->default(0);
            $table->integer('CODCTACTB3')->length(10)->nullable()->default(0);
            $table->string('BAIXACERTO')->length(1)->default('S' );
            $table->string('INFCMC7')->length(1)->default('N' );
            $table->string('GRUPOLIMCRED')->length(20)->nullable();
            $table->string('FASTUSA')->length(1)->default('N' );
            $table->text('IMAGEM')->length(4000)->nullable();
            $table->float('PERCCUSVAR')->length(126)->nullable();
            $table->float('VLRCUSVAR')->length(126)->nullable();
            $table->string('FASTBAIXA')->length(1)->default('N' );
            $table->integer('PRAZO')->length(5)->default(0);
            $table->integer('CODGRUPOTIPTIT')->length(5)->default(0);
            $table->string('IMPBOLRENEG')->length(1)->default('N' );
            $table->string('SUBTIPOVENDA')->length(2)->default('0' );
            $table->string('CONFERENCIA')->length(1)->default('N' );
            $table->string('ATIVO')->length(1)->default('S' );
            $table->integer('CODPARCTEF')->length(10)->default(0);
            $table->string('IMPCOMPROVANTE')->length(1)->default('N' );
            $table->integer('CODRECGNRE')->length(10)->nullable()->default(0);
            $table->integer('CODDETRECGNRE')->length(10)->nullable()->default(0);
            $table->integer('CODPRODGNRE')->length(10)->nullable()->default(0);
            $table->string('TPAGNFCE')->length(2)->nullable();
            $table->string('AJUSTAVP')->length(1)->default('N' );
            $table->string('UTILIZAPOS')->length(1)->nullable()->default('N');
            $table->integer('NROPARCELAS')->length(5)->default(0);
            $table->string('INTEGRAECONECT')->length(1)->default('N' );
            $table->integer('CODFINALIZADORA')->length(10)->nullable()->default(0);
            $table->integer('GRUPOFINALIZADORA')->length(10)->nullable()->default(0);
            $table->string('CODBANDEIRAECONECT')->length(32)->nullable();
            $table->string('CONVENIOECONECT')->length(1)->default('N' );
            $table->integer('DIAVENC')->length(5)->nullable()->default(0);
            $table->string('TIPVENC')->length(1)->nullable();
            $table->string('OPERACAOCTF')->length(3)->nullable();
            $table->integer('QTDPARCELCTF')->length(5)->nullable()->default(0);
            $table->string('RECEBANTAPROV')->length(1)->nullable();
            $table->string('ARREDPRIMEIRAPARC')->length(1)->nullable();
            $table->string('TRUNCPARCELA')->length(1)->nullable();
            $table->string('TIMUSADOLOCACAO')->length(1)->nullable();
            $table->string('TIPDOCRURAL')->length(1)->nullable();
            $table->string('PROIBIMPBOL')->length(1)->nullable();
            $table->string('ALTERASIMULTPV')->length(1)->nullable();
            $table->string('DESCRTPAGNFCE')->length(60)->nullable();
            $table->string('INDRECEFDCONT')->length(2)->nullable();
            $table->string('INFCOMPLEFDCONT')->length(255)->nullable();
            $table->string('CONSDIASUTEIS')->length(1)->nullable();
            $table->string('CREDENCIADORACFE')->length(5)->nullable();
            $table->string('UTILIZAPIXSITEF')->length(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFTIT');
    }
}