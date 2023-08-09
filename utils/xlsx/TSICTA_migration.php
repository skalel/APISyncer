<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsictaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TSICTA', function (Blueprint $table) {
            $table->string('CODCTABCO')->length(17)->nullable();
            $table->string('DESCRICAO')->length(40)->nullable();
            $table->integer('CODBCO')->length(5)->nullable()->default(0);
            $table->string('CODAGE')->length(5)->nullable();
            $table->integer('CODEMP')->length(5)->nullable()->default(0);
            $table->string('CLASSE')->length(1)->nullable();
            $table->integer('CARTEIRA')->length(5)->nullable()->default(0);
            $table->integer('SEQREM')->length(10)->nullable()->default(0);
            $table->integer('REMBCO')->length(10)->nullable()->default(0);
            $table->integer('REMFINAL')->length(10)->nullable()->default(0);
            $table->float('CONVENIO')->length(126)->nullable();
            $table->integer('INSTRUCAOI')->length(5)->nullable()->default(0);
            $table->integer('INSTRUCAOII')->length(5)->nullable()->default(0);
            $table->integer('DIASPROT')->length(5)->nullable()->default(0);
            $table->string('EMITEBOLETA')->length(1)->default('S' );
            $table->string('IMPBOLETA')->length(32)->nullable();
            $table->integer('MODBOLETA')->length(5)->nullable()->default(0);
            $table->integer('CODCTACTB')->length(10)->nullable()->default(0);
            $table->string('EXCLUSIVA')->length(1)->default('S' );
            $table->string('ATIVA')->length(1)->default('S' );
            $table->integer('NUMCHEQ')->length(10)->nullable()->default(0);
            $table->string('CTADEFEMIBOL')->length(1)->nullable()->default('N');
            $table->float('VLRMINBOLETA')->length(126)->nullable();
            $table->integer('CTAMINBOLETA')->length(5)->nullable()->default(0);
            $table->float('TAXA')->length(126)->nullable();
            $table->integer('CODPARC')->length(10)->default(0);
            $table->string('TIPOIMPRESSORA')->length(1)->default('1' );
            $table->integer('CODOPEREXCL')->length(5)->default(0);
            $table->datetime('DTALTER')->length(7)->default(SYSDATE );
            $table->datetime('DTIMPLANT')->length(7)->nullable();
            $table->float('SALDOBCO')->length(126)->nullable();
            $table->float('SALDOREAL')->length(126)->nullable();
            $table->integer('CODMOEDA')->length(5)->default(0);
            $table->integer('CODUSU')->length(5)->nullable()->default(0);
            $table->integer('REMBCOMAX')->length(10)->nullable()->default(0);
            $table->string('ZERARAUT')->length(1)->default('N' );
            $table->integer('CODCTABCOINTREM')->length(10)->nullable()->default(0);
            $table->integer('SEQREM2')->length(10)->nullable()->default(0);
            $table->integer('REMFINAL2')->length(10)->nullable()->default(0);
            $table->integer('NURFEMODCHEQG')->length(5)->nullable()->default(0);
            $table->integer('CODCORRBCO')->length(5)->nullable()->default(0);
            $table->integer('NUCONTRATO')->length(10)->nullable()->default(0);
            $table->integer('MODALIDADE')->length(5)->nullable()->default(0);
            $table->integer('CATEGLANCHQ')->length(5)->nullable()->default(0);
            $table->string('CAMPOLIVRE')->length(25)->nullable();
            $table->string('NOSSONUMERO')->length(25)->nullable();
            $table->string('MULTIPNOSSONUM')->length(25)->nullable();
            $table->string('TIPMULTIPSOMA')->length(1)->default('T' );
            $table->string('TIPMODNOSSNUM')->length(1)->default('O' );
            $table->string('SUBRESTMODULO')->length(1)->default('N' );
            $table->integer('RESTOSUBST1')->length(5)->nullable()->default(0);
            $table->integer('RESTOSUBST2')->length(5)->nullable()->default(0);
            $table->integer('RESTOSUBST3')->length(5)->nullable()->default(0);
            $table->string('DIGITOSUBST1')->length(1)->nullable();
            $table->string('DIGITOSUBST2')->length(1)->nullable();
            $table->string('DIGITOSUBST3')->length(1)->nullable();
            $table->string('NOSSONUMATIVO')->length(1)->default('N' );
            $table->string('LINHADIGATIVO')->length(1)->default('N' );
            $table->integer('NUMCLIENTE')->length(10)->nullable()->default(0);
            $table->string('IDCLIENTE')->length(30)->nullable();
            $table->integer('CODAGEBENEF')->length(5)->nullable()->default(0);
            $table->integer('CODCTABENEF')->length(10)->nullable()->default(0);
            $table->integer('CODCTABAIXA')->length(5)->nullable()->default(0);
            $table->string('PJBCRED')->length(80)->nullable();
            $table->string('PJBCHAVE')->length(80)->nullable();
            $table->string('BJBBAIBOLPAG')->length(1)->nullable();
            $table->string('PJBCONBAIXCRED')->length(1)->nullable();
            $table->integer('CODLANCBAIXABOLRAP')->length(5)->nullable()->default(0);
            $table->integer('CODTIPOPERBAIXABOLRAP')->length(5)->nullable()->default(0);
            $table->string('TIPOBOLETO')->length(1)->nullable();
            $table->string('CODCONTARURAL')->length(3)->nullable();
            $table->string('DESCONSLCDPR')->length(1)->nullable();
            $table->string('LOGOURL')->length(4000)->nullable();
            $table->string('NUMCONTARURAL')->length(3)->nullable();
            $table->string('CHAVEPIX')->length(77)->nullable();
            $table->string('URLPIX')->length(300)->nullable();
            $table->integer('QTDDIASVALPIX')->length(10)->nullable()->default(0);
            $table->integer('NURFEMODBOLETO')->length(5)->nullable()->default(0);
            $table->string('CHAVEAPIPIX')->length(250)->nullable();
            $table->string('TITINFADICPIX')->length(50)->nullable();
            $table->string('MENADICPIX')->length(300)->nullable();
            $table->string('SENCLIPIX')->length(1000)->nullable();
            $table->string('IDCLIPIX')->length(250)->nullable();
            $table->string('CONCAUTRECEBPIX')->length(1)->nullable();
            $table->integer('IDAPIBANCO')->length(10)->nullable()->default(0);
            $table->string('INDICADORPIX')->length(2)->nullable();
            $table->integer('VARIACAO')->length(10)->nullable()->default(0);
            $table->string('ACEITATITULOVENCIDO')->length(32)->nullable();
            $table->string('TIPOAPIBOLETO')->length(1)->nullable();
            $table->string('STATUSAPI')->length(32)->nullable();
            $table->integer('RECEBIMENTODIAS')->length(10)->nullable()->default(0);
            $table->string('RECEBIMENTOPARCIAL')->length(32)->nullable();
            $table->string('APICONCILIACAOAUTOMATICA')->length(1)->nullable();
            $table->string('APIBAIXAAUTOMATICA')->length(1)->nullable();
            $table->datetime('DTREGCONTA')->length(7)->nullable();
            $table->integer('DIASPARANEGATIVACAO')->length(10)->nullable()->default(0);
            $table->integer('ORGAONEGATIVADOR')->length(10)->nullable()->default(0);
            $table->integer('DIASPROTESTO')->length(10)->nullable()->default(0);
            $table->integer('DIASMULTA')->length(10)->nullable()->default(0);
            $table->integer('VALORMULTA')->length(6)->nullable()->default(0);
            $table->string('DATAMULTA')->length(1)->nullable();
            $table->string('TIPOMULTA')->length(1)->nullable();
            $table->integer('VALORJUROS')->length(6)->nullable()->default(0);
            $table->string('TIPOJUROS')->length(1)->nullable();
            $table->integer('INSTRUCAOPROTESTO')->length(4)->nullable()->default(0);
            $table->string('CONTABILIZARDIAS')->length(1)->nullable();
            $table->integer('INSTRUCAONEGATIVACAO')->length(4)->nullable()->default(0);
            $table->integer('IDSEQBOL')->length(10)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TSICTA');
    }
}