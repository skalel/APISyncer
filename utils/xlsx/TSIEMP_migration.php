<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsiempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TSIEMP', function (Blueprint $table) {
            $table->string('NOMEFANTASIA')->length(40)->nullable();
            $table->string('RAZAOSOCIAL')->length(40)->nullable();
            $table->string('RAZAOABREV')->length(15);
            $table->integer('CODEMPMATRIZ')->length(5)->nullable()->default(0);
            $table->integer('CODEND')->length(10)->nullable()->default(0);
            $table->string('NUMEND')->length(6)->nullable();
            $table->string('COMPLEMENTO')->length(10)->nullable();
            $table->integer('CODBAI')->length(10)->default(0);
            $table->integer('CODCID')->length(10)->nullable()->default(0);
            $table->string('CEP')->length(8)->nullable();
            $table->string('TELEFONE')->length(13)->nullable();
            $table->string('FAX')->length(13)->nullable();
            $table->string('TELEX')->length(12)->nullable();
            $table->string('EMAIL')->length(80)->nullable();
            $table->string('HOMEPAGE')->length(255)->nullable();
            $table->integer('NUMPROPR')->length(5)->nullable()->default(0);
            $table->string('PRINCTITULAR')->length(40)->nullable();
            $table->string('CGC')->length(14)->nullable();
            $table->string('INSCESTAD')->length(16)->nullable();
            $table->string('INSCMUN')->length(16)->nullable();
            $table->integer('CODMUN')->length(10)->nullable()->default(0);
            $table->integer('NATESTAB')->length(5)->nullable()->default(0);
            $table->integer('NATJUR')->length(5)->nullable()->default(0);
            $table->string('RAMOATIV')->length(40)->nullable();
            $table->integer('ATIVECON')->length(10)->nullable()->default(0);
            $table->string('REGJUNTACOM')->length(12)->nullable();
            $table->datetime('DTREGJUNTA')->length(7)->nullable();
            $table->text('LOGOMARCA')->length(4000)->nullable();
            $table->string('FINANCEIRO')->length(1)->default('N' );
            $table->string('ESTOQUE')->length(1)->default('N' );
            $table->string('CARGAS')->length(1)->default('N' );
            $table->string('COMISSOES')->length(1)->default('N' );
            $table->string('PRODUCAO')->length(1)->default('N' );
            $table->string('SUPDECISAO')->length(1)->default('N' );
            $table->string('LIVROSFISCAIS')->length(1)->default('N' );
            $table->datetime('CONTABILIDADE')->length(7)->nullable();
            $table->string('FOLHAPAGTO')->length(1)->default('N' );
            $table->string('CODCNL')->length(10)->nullable();
            $table->string('SIMPLES')->length(1)->nullable()->default('N');
            $table->integer('CODPARC')->length(10)->nullable()->default(0);
            $table->float('LIMCURVA_B')->length(126)->nullable();
            $table->float('LIMCURVA_C')->length(126)->nullable();
            $table->integer('EMPAGRUPARGOL')->length(5)->nullable()->default(0);
            $table->string('SERIENFDES')->length(4)->nullable();
            $table->string('MODELONFDES')->length(2)->nullable();
            $table->string('COOPERATIVA')->length(1)->default('N' );
            $table->datetime('DTCONVSOC')->length(7)->nullable();
            $table->string('DUPLIV')->length(1)->default('N' );
            $table->string('CPFRESP')->length(11)->nullable();
            $table->integer('CODREGTRIB')->length(5)->nullable()->default(0);
            $table->integer('TIPOSN')->length(10)->nullable()->default(0);
            $table->integer('CODPARCDIV')->length(10)->default(0);
            $table->string('MD5PAF')->length(32)->nullable();
            $table->string('RAZAOSOCIALCOMPLETA')->length(250)->nullable();
            $table->string('SERVIDORSMTP')->length(80)->nullable();
            $table->string('TIPOSMTP')->length(1)->default('N' );
            $table->string('USUARIOSMTP')->length(80)->nullable();
            $table->string('SENHASMTP')->length(80)->nullable();
            $table->integer('PORTASMTP')->length(5)->default(25);
            $table->string('SEGURANCASMTP')->length(1)->default('N' );
            $table->string('LATITUDE')->length(255)->nullable();
            $table->string('LONGITUDE')->length(255)->nullable();
            $table->string('SIMPLESNACNAUF')->length(1)->default('S' );
            $table->string('DMACODINSP')->length(2)->nullable();
            $table->string('DMAESPECIAL')->length(1)->default('N' );
            $table->datetime('DTENCERBALAN')->length(7)->nullable();
            $table->string('CODQUALASSIN')->length(3)->nullable();
            $table->integer('CODPARCRESP')->length(10)->nullable()->default(0);
            $table->string('SITESPECIALRESP')->length(2)->nullable();
            $table->string('EXIGEISSQN')->length(2)->nullable();
            $table->string('REGESPTRIBUT')->length(2)->nullable();
            $table->string('RNTRC')->length(8)->nullable();
            $table->integer('CLASSTRIB')->length(5)->nullable()->default(0);
            $table->integer('CNAEPREPON')->length(10)->nullable()->default(0);
            $table->integer('INDCOOP')->length(5)->default(0);
            $table->integer('INDCONSTR')->length(5)->default(0);
            $table->integer('INFOOBRA')->length(5)->nullable()->default(0);
            $table->integer('CODUSU')->length(5)->nullable()->default(0);
            $table->datetime('DHALTER')->length(7)->default(SYSDATE );
            $table->integer('ACDINTISENMULTA')->length(5)->nullable()->default(0);
            $table->integer('CODPARCEMPSOFT')->length(10)->nullable()->default(0);
            $table->integer('CODCTTPARCEMPSOFT')->length(10)->nullable()->default(0);
            $table->integer('INDSITESP')->length(5)->default(0);
            $table->string('TIPTRANSMNFSE')->length(1)->default('A' );
            $table->integer('COREMPRESA')->length(10)->nullable()->default(16777215);
            $table->integer('QTDACESSOS')->length(10)->nullable()->default(0);
            $table->string('ENVESOCIAL')->length(1)->default('N' );
            $table->string('RECIBOESOCIAL')->length(40)->nullable();
            $table->datetime('INIVALESOCIAL')->length(7)->nullable();
            $table->datetime('FIMVALESOCIAL')->length(7)->nullable();
            $table->integer('INDOPCCP')->length(5)->nullable()->default(0);
            $table->integer('NUVERSAO')->length(19)->nullable()->default(0);
            $table->string('USARAZAOSOCIAL')->length(1)->nullable();
            $table->datetime('DTABERTURA')->length(7)->nullable();
            $table->string('EMPIDENOTAS')->length(50)->nullable();
            $table->string('PRODUTORRURAL')->length(1)->nullable();
            $table->string('COTM')->length(20)->nullable();
            $table->datetime('DHCONSITIMEND')->length(7)->nullable();
            $table->string('NUREST')->length(25)->nullable();
            $table->string('NUMTAF')->length(12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TSIEMP');
    }
}