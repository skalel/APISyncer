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
        Schema::create('tcbpla', function (Blueprint $table) {
            $table->integer('CODCTACTB')->length(22)->primary();
            $table->integer('CODEMP')->length(22);
            $table->string('CTACTB')->length(30);
            $table->integer('GRAU')->length(22);
            $table->string('DESCRCTA')->length(40);
            $table->string('ANALITICA')->length(1)->nullable()->default('N');
            $table->string('CENCUSOBRIG')->length(1)->default('N');
            $table->string('CONVSALDOMOEDA')->length(1)->nullable()->default('I');
            $table->string('DTBASECONVMOEDA')->length(1)->nullable();
            $table->integer('CODCTACTBPAI')->length(22);
            $table->string('ATIVA')->length(1)->default('S');
            $table->integer('PRODUTO')->length(22)->nullable();
            $table->integer('PLANTA')->length(22)->nullable();
            $table->integer('PROCESSO')->length(22)->nullable();
            $table->string('BEMORIGINAL')->length(1)->default('N');
            $table->string('BEMRESREAV')->length(1)->default('N');
            $table->string('BEMOUTROS')->length(1)->default('N');
            $table->string('OBSERVACOES')->length(4000)->nullable();
            $table->string('PODELANCTOMANUAL')->length(1)->default('S');
            $table->datetime('DTINCLUSAO')->length(7)->nullable()->format('d/m/Y H:i:s');
            $table->string('CODGRUPOCTA')->length(2)->nullable();
            $table->integer('CODCTACTBSUBST')->length(22)->default(0);
            $table->datetime('DTINATIV')->length(7)->nullable()->format('d/m/Y H:i:s');
            $table->integer('CODUSU')->length(22)->default(0);
            $table->datetime('DTALTER')->length(7)->default(DB::raw('getutcdate()'))->format('d/m/Y H:i:s');
            $table->string('PROJOBRIG')->length(1)->default('N');
            $table->string('LALUR_A')->length(6)->nullable()->default('0');
            $table->integer('TIPSALALUR')->length(22)->nullable();
            $table->string('TABELA')->length(6)->nullable();
            $table->integer('CODRAZAUX')->length(22)->nullable();
            $table->integer('NATUREZAEFD')->length(22)->nullable();
            $table->string('LALUR_A_CRED')->length(6)->nullable();
            $table->string('TABELACRED')->length(6)->nullable();
            $table->string('RECDESP')->length(1)->nullable();
            $table->string('CLASSIFCSLL')->nullable();
            $table->string('CLASSIFIRPJ')->nullable();
            $table->string('ADICOESCSLL')->nullable();
            $table->string('ADICOESIRPJ')->nullable();
            $table->string('CONRESULTCSLL')->nullable();
            $table->string('CONRESULTIRPJ')->nullable();
            $table->string('EXCLUSOESCSLL')->nullable();
            $table->string('EXCLUSOESIRPJ')->nullable();
            $table->string('PAT4IRPJ')->nullable();
            $table->string('ZERACRCSLL')->nullable();
            $table->string('ZERACRIRPJ')->nullable();
            $table->integer('CODCONTA')->nullable();
            $table->string('CODLALURB')->nullable();
            $table->string('DESCRCONTA')->nullable();
            $table->string('INDTRIBLALURB')->nullable();
            $table->string('AD_IDEXTERNO')->nullable();
            $table->string('TABELALALURB')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcbpla');
    }
};
