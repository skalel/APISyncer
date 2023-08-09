<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcbplaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TCBPLA', function (Blueprint $table) {
            $table->integer('CODEMP')->length(5)->default(0);
            $table->string('CTACTB')->length(30);
            $table->integer('GRAU')->length(5)->default(0);
            $table->string('DESCRCTA')->length(40);
            $table->string('ANALITICA')->length(1)->nullable()->default('N');
            $table->string('CENCUSOBRIG')->length(1)->default('N' );
            $table->string('CONVSALDOMOEDA')->length(1)->nullable()->default('I');
            $table->string('DTBASECONVMOEDA')->length(1)->nullable();
            $table->integer('CODCTACTBPAI')->length(10)->default(0);
            $table->string('ATIVA')->length(1)->default('S' );
            $table->integer('PRODUTO')->length(5)->nullable()->default(0);
            $table->integer('PLANTA')->length(5)->nullable()->default(0);
            $table->integer('PROCESSO')->length(5)->nullable()->default(0);
            $table->string('BEMORIGINAL')->length(1)->default('N' );
            $table->string('BEMRESREAV')->length(1)->default('N' );
            $table->string('BEMOUTROS')->length(1)->default('N' );
            $table->string('OBSERVACOES')->length(4000)->nullable();
            $table->string('PODELANCTOMANUAL')->length(1)->default('S' );
            $table->datetime('DTINCLUSAO')->length(7)->nullable();
            $table->string('CODGRUPOCTA')->length(2)->nullable();
            $table->string('CODCTAREF')->length(30)->nullable();
            $table->string('RAZAOAUXSPED')->length(1)->default('N' );
            $table->integer('CODCTACTBSUBST')->length(10)->default(0);
            $table->datetime('DTINATIV')->length(7)->nullable();
            $table->integer('CODUSU')->length(5)->default(0);
            $table->datetime('DTALTER')->length(7)->default(SYSDATE );
            $table->string('PROJOBRIG')->length(1)->default('N' );
            $table->string('LALUR')->length(1)->nullable();
            $table->string('LALUR_A')->length(6)->nullable()->default('0');
            $table->integer('TIPSALALUR')->length(5)->nullable()->default(0);
            $table->string('CODCTAREF_FCONT')->length(30)->nullable();
            $table->string('TABELA')->length(6)->nullable();
            $table->integer('CODRAZAUX')->length(5)->nullable()->default(0);
            $table->string('DISPSPED')->length(1)->nullable();
            $table->integer('NATUREZAEFD')->length(5)->nullable()->default(0);
            $table->string('LALUR_A_CRED')->length(6)->nullable();
            $table->string('TABELACRED')->length(6)->nullable();
            $table->string('RECDESP')->length(1)->nullable();
            $table->string('CLASSIFIRPJ')->length(1)->nullable();
            $table->string('CLASSIFCSLL')->length(1)->nullable();
            $table->string('ADICOESIRPJ')->length(1)->nullable();
            $table->string('CONRESULTIRPJ')->length(1)->nullable();
            $table->string('EXCLUSOESIRPJ')->length(1)->nullable();
            $table->string('PAT4IRPJ')->length(1)->nullable();
            $table->string('ZERACRIRPJ')->length(1)->nullable();
            $table->string('ADICOESCSLL')->length(1)->nullable();
            $table->string('CONRESULTCSLL')->length(1)->nullable();
            $table->string('EXCLUSOESCSLL')->length(1)->nullable();
            $table->string('ZERACRCSLL')->length(1)->nullable();
            $table->string('CODLALURB')->length(10)->nullable();
            $table->string('INDTRIBLALURB')->length(1)->nullable();
            $table->integer('CODCONTA')->length(38)->nullable()->default(0);
            $table->string('DESCRCONTA')->length(50)->nullable();
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
        Schema::dropIfExists('TCBPLA');
    }
}