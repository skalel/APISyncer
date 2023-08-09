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
        Schema::create('tsiemp', function (Blueprint $table) {
          $table->INTEGER('CODEMP')->length(22)->primary();
          $table->STRING('NOMEFANTASIA')->length(40)->nullable();
          $table->STRING('RAZAOSOCIAL')->length(40)->nullable();
          $table->STRING('RAZAOABREV')->length(15);
          $table->INTEGER('CODEMPMATRIZ')->length(22)->nullable();
          $table->INTEGER('CODEND')->length(22)->nullable()->default(0);
          $table->STRING('NUMEND')->length(6)->nullable();
          $table->STRING('COMPLEMENTO')->length(10)->nullable();
          $table->INTEGER('CODBAI')->length(22)->default(0);
          $table->INTEGER('CODCID')->length(22)->nullable()->default(0);
          $table->STRING('CEP')->length(8)->nullable();
          $table->STRING('TELEFONE')->length(13)->nullable();
          $table->STRING('FAX')->length(13)->nullable();
          $table->STRING('TELEX')->length(12)->nullable();
          $table->STRING('EMAIL')->length(80)->nullable();
          $table->STRING('HOMEPAGE')->length(255)->nullable();
          $table->INTEGER('NUMPROPR')->length(22)->nullable();
          $table->STRING('PRINCTITULAR')->length(40)->nullable();
          $table->STRING('CGC')->length(14)->nullable();
          $table->STRING('INSCESTAD')->length(16)->nullable();
          $table->STRING('INSCMUN')->length(16)->nullable();
          $table->INTEGER('CODMUN')->length(22)->nullable();
          $table->INTEGER('NATESTAB')->length(22)->nullable();
          $table->INTEGER('NATJUR')->length(22)->nullable();
          $table->STRING('RAMOATIV')->length(40)->nullable();
          $table->INTEGER('ATIVECON')->length(22)->nullable();
          $table->STRING('REGJUNTACOM')->length(12)->nullable();
          $table->DATE('DTREGJUNTA')->length(7)->nullable();
          $table->BINARY('LOGOMARCA')->length(4000)->nullable();
          $table->STRING('FINANCEIRO')->length(1)->default('N');
          $table->STRING('ESTOQUE')->length(1)->default('N');
          $table->STRING('CARGAS')->length(1)->default('N');
          $table->STRING('COMISSOES')->length(1)->default('N');
          $table->STRING('PRODUCAO')->length(1)->default('N');
          $table->STRING('SUPDECISAO')->length(1)->default('N');
          $table->STRING('LIVROSFISCAIS')->length(1)->default('N');
          $table->DATETIME('CONTABILIDADE')->length(7)->nullable();
          $table->STRING('FOLHAPAGTO')->length(1)->default('N');
          $table->STRING('CODCNL')->length(10)->nullable();
          $table->STRING('SIMPLES')->length(1)->nullable()->default('N');
          $table->FLOAT('LIMCURVA_B')->length(22)->nullable();
          $table->FLOAT('LIMCURVA_C')->length(22)->nullable();
          $table->INTEGER('EMPAGRUPARGOL')->length(22)->nullable();
          $table->STRING('SERIENFDES')->length(4)->nullable();
          $table->STRING('MODELONFDES')->length(2)->nullable();
          $table->INTEGER('CODPARC')->length(22)->default(0);
          $table->STRING('COOPERATIVA')->length(1)->default('N');
          $table->DATE('DTCONVSOC')->length(7)->nullable();
          $table->STRING('DUPLIV')->length(1)->default('N');
          $table->STRING('CPFRESP')->length(11)->nullable();
          $table->INTEGER('CODREGTRIB')->length(22)->nullable();
          $table->INTEGER('TIPOSN')->length(22)->nullable();
          $table->STRING('RAZAOSOCIALCOMPLETA')->length(250)->nullable();
          $table->STRING('LATITUDE')->length(255)->nullable();
          $table->STRING('LONGITUDE')->length(255)->nullable();
          $table->STRING('SIMPLESNACNAUF')->length(1)->default('S');
          $table->STRING('RNTRC')->length(8)->nullable();
          $table->INTEGER('COREMPRESA')->length(22)->nullable()->default(16777215);
          $table->INTEGER('QTDACESSOS')->length(22)->nullable();
          $table->STRING('USARAZAOSOCIAL')->length(1)->nullable();
          $table->STRING('EMPIDENOTAS')->length(50)->nullable();
          $table->integer('ACDINTISENMULTA')->nullable();
          $table->integer('CLASSTRIB')->nullable();
          $table->integer('CNAEPREPON')->nullable();
          $table->string('COTM')->nullable();
          $table->datetime('DHCONSITIMEND')->nullable();
          $table->integer('INDCOOP')->nullable();
          $table->string('TIPOREGRA')->nullable();
          $table->integer('INDSITESP')->nullable();
          $table->integer('INDCONSTR')->nullable();
          $table->integer('INFOOBRA')->nullable();
          $table->string('NUMTAF')->nullable();
          $table->string('PRODUTORRURAL')->nullable();
          $table->integer('INDOPCCP')->nullable();
          $table->string('NUREST')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsiemp');
    }
};
