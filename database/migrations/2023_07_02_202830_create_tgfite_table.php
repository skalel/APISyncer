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
        Schema::create('tgfite', function (Blueprint $table) {
          $table->integer('NUNOTA')->length(10)->default(0);
          $table->integer('SEQUENCIA')->length(5)->default(0);
            $table->integer('NUTAB')->length(10)->nullable()->default(0);
            $table->integer('CODEMP')->length(5)->default(0);
            $table->integer('CODPROD')->length(10)->default(0);
            $table->integer('CODLOCALORIG')->length(10)->default(0);
            $table->integer('CODLOCALDEST')->length(10)->default(0);
            $table->string('CONTROLE')->length(19)->default(' ' );
            $table->string('COMPLDESC')->nullable();
            $table->string('CONTROLEDEST')->length(19)->default(' ' );
            $table->string('USOPROD')->length(1)->default('V' );
            $table->integer('CODCFO')->length(10)->default(0);
            $table->float('QTDNEG')->length(126)->default(0);
            $table->float('QTDPENDENTE')->length(126)->default(0);
            $table->float('QTDENTREGUE')->length(126)->default(0);
            $table->float('QTDCONFERIDA')->length(126)->default(0);
            $table->float('RESERVADO')->length(126)->default(0);
            $table->float('VLRUNIT')->length(126)->default(0);
            $table->float('VLRTOT')->length(126)->default(0);
            $table->float('VLRCUS')->length(126)->default(0);
            $table->float('BASEIPI')->length(126)->default(0);
            $table->float('VLRIPI')->length(126)->default(0);
            $table->float('BASEICMS')->length(126)->default(0);
            $table->float('VLRICMS')->length(126)->default(0);
            $table->float('VLRDESC')->length(126)->default(0);
            $table->float('BASESUBSTIT')->length(126)->default(0);
            $table->float('VLRSUBST')->length(126)->default(0);
            $table->float('ALIQICMS')->length(126)->nullable();
            $table->float('ALIQIPI')->length(126)->nullable();
            $table->string('PENDENTE')->length(1)->default('S' );
            $table->string('CODVOL')->length(2)->default('0' );
            $table->integer('CODTRIB')->length(5)->nullable()->default(0);
            $table->integer('ATUALESTOQUE')->length(5)->default(-1);
            $table->string('OBSERVACAO')->length(4000)->nullable();
            $table->string('RESERVA')->length(1)->default('N' );
            $table->string('STATUSNOTA')->length(1)->default('P' );
            $table->integer('CODOBSPADRAO')->length(5)->nullable()->default(0);
            $table->integer('CODVEND')->length(5)->default(0);
            $table->integer('CODEXEC')->length(5)->default(0);
            $table->string('FATURAR')->length(1)->default('S' );
            $table->float('VLRREPRED')->length(126)->default(0);
            $table->float('VLRDESCBONIF')->length(126)->default(0);
            $table->float('PERCDESC')->length(126)->default(0);
            $table->float('M3')->length(126)->nullable();
            $table->float('ALIQICMSRED')->length(126)->nullable()->default(0);
            $table->integer('CODPARCEXEC')->length(10)->nullable()->default(0);
            $table->float('CUSTO')->length(126)->nullable();
            $table->float('BASESUBSTSEMRED')->length(126)->nullable()->default(0);
            $table->integer('CODUSU')->length(5)->nullable()->default(0);
            $table->datetime('DTALTER')->length(7)->nullable();
            $table->string('SOLCOMPRA')->length(1)->nullable();
            $table->integer('CODTRIBISS')->length(5)->nullable()->default(0);
            $table->integer('CODCFPS')->length(10)->nullable()->default(0);
            $table->float('ALIQISS')->length(126)->nullable();
            $table->float('QTDFORMULA')->length(126)->nullable();
            $table->string('ATUALESTTERC')->length(1)->nullable();
            $table->float('PERCDESCBONIF')->length(126)->nullable();
            $table->string('TERCEIROS')->length(1)->nullable();
            $table->string('ENDIMAGEM')->length(100)->nullable();
            $table->string('NCM')->length(100)->nullable();
            $table->float('ALTURA')->length(126)->nullable();
            $table->float('LARGURA')->length(126)->nullable();
            $table->float('ESPESSURA')->length(126)->nullable();
            $table->integer('CODCAV')->length(10)->nullable()->default(0);
            $table->integer('CODPROC')->length(10)->nullable()->default(0);
            $table->float('QTDPECA')->length(126)->nullable();
            $table->float('QTDUNIDPAD')->length(126)->nullable();
            $table->float('PRECOBASE')->length(126)->nullable();
            $table->float('VLRACRESCDESC')->length(126)->nullable();
            $table->float('VLRRETENCAO')->length(126)->nullable();
            $table->integer('CSTIPI')->length(5)->nullable()->default(0);
            $table->float('PERCCOM')->length(126)->nullable();
            $table->float('VLRCOM')->length(126)->nullable();
            $table->string('ALTPRECO')->length(1)->nullable();
            $table->float('QTDFIXADA')->length(126)->nullable();
            $table->float('PERCCOMGER')->length(126)->nullable();
            $table->float('VLRCOMGER')->length(126)->nullable();
            $table->float('QTDWMS')->length(126)->nullable();
            $table->integer('BASICMMOD')->length(10)->nullable()->default(0);
            $table->integer('BASICMSTMOD')->length(10)->nullable()->default(0);
            $table->float('QTDFAT')->length(126)->nullable();
            $table->float('BASESTUFDEST')->length(126)->nullable();
            $table->float('VLRICMSUFDEST')->length(126)->nullable();
            $table->float('BASESTANT')->length(126)->nullable();
            $table->integer('GRUPOTRANSG')->length(10)->nullable()->default(0);
            $table->string('PRODUTONFE')->length(60)->nullable();
            $table->string('GTINNFE')->length(14)->nullable();
            $table->string('GTINTRIBNFE')->length(14)->nullable();
            $table->integer('CODPROMO')->length(10)->nullable()->default(0);
            $table->float('VLRPROMO')->length(126)->nullable();
            $table->float('VLRLIQPROM')->length(126)->nullable();
            $table->float('PRECOBASEQTD')->length(126)->nullable();
            $table->string('RETDATACRITICA')->length(1)->nullable();
            $table->float('PERCPUREZA')->length(126)->nullable();
            $table->float('PERCGERMIN')->length(126)->nullable();
            $table->integer('NUPROMOCAO')->length(10)->nullable()->default(0);
            $table->float('PERCDESCPROM')->length(126)->nullable();
            $table->float('VLRPTOPUREZA')->length(126)->nullable();
            $table->string('CODANTECIPST')->length(1)->nullable();
            $table->integer('NUMPEDIDO')->length(10)->nullable()->default(0);
            $table->integer('SEQPEDIDO')->length(5)->nullable()->default(0);
            $table->integer('CSOSN')->length(5)->nullable()->default(0);
            $table->string('NUMPEDIDO2')->length(15)->nullable();
            $table->string('SEQPEDIDO2')->length(6)->nullable();
            $table->string('STATUSLOTE')->length(1)->nullable();
            $table->integer('QTDVOL')->length(10)->nullable()->default(0);
            $table->string('SERIEINICIAL')->length(30)->nullable();
            $table->string('SERIEFINAL')->length(30)->nullable();
            $table->datetime('DTINICIO')->length(7)->nullable();
            $table->integer('HRINICIO')->length(10)->nullable()->default(0);
            $table->integer('HRFIM')->length(10)->nullable()->default(0);
            $table->float('VLRUNITDOLAR')->length(126)->nullable();
            $table->float('PESO')->length(126)->nullable();
            $table->float('PESOBRUTO')->length(126)->nullable();
            $table->float('PESOLIQ')->length(126)->nullable();
            $table->string('MD5PAF')->length(32)->nullable();
            $table->float('BASEISS')->length(126)->nullable();
            $table->float('VLRISS')->length(126)->nullable();
            $table->integer('CODTPA')->length(10)->nullable()->default(0);
            $table->float('VLRTROCA')->length(126)->nullable();
            $table->integer('VARIACAOFCP')->length(5)->nullable()->default(0);
            $table->datetime('DTFIM')->length(7)->nullable();
            $table->integer('TEMPOGASTO')->length(10)->nullable()->default(0);
            $table->float('DESVIOPADRAO')->length(126)->nullable();
            $table->integer('PERCTROCA')->length(18)->nullable()->default(0);
            $table->float('PERCDESCDIGITADO')->length(126)->nullable();
            $table->float('PERCDESCTGFDES')->length(126)->nullable();
            $table->integer('SEQUENCIAFISCAL')->length(5)->nullable()->default(0);
            $table->float('VLRDESCDIGITADO')->length(126)->nullable();
            $table->float('PERCVC')->length(126)->nullable();
            $table->integer('CODMOTDESONERAICMS')->length(5)->nullable()->default(0);
            $table->integer('CODETAPA')->length(10)->nullable()->default(0);
            $table->integer('VARIACAO')->length(5)->nullable()->default(0);
            $table->string('ATUALESTINDIVIDUAL')->length(1)->nullable();
            $table->float('VLRSTEXTRANOTA')->length(126)->nullable();
            $table->string('ULOCETPAESTIND')->length(1)->nullable();
            $table->integer('CODLOCALTERC')->length(10)->nullable()->default(0);
            $table->string('ORIGPROD')->length(1)->nullable();
            $table->string('REFFORN')->nullable();
            $table->string('REFERENCIA')->nullable();
            $table->float('PERCDESCBASE')->length(126)->nullable();
            $table->string('NRSERIERESERVA')->length(60)->nullable();
            $table->float('VLRUNITLOC')->length(126)->nullable();
            $table->float('VLRICMSANT')->length(126)->nullable();
            $table->float('BASESUBSTITANT')->length(126)->nullable();
            $table->float('VLRSUBSTANT')->length(126)->nullable();
            $table->integer('NUMEROOS')->length(10)->nullable()->default(0);
            $table->string('CANCELADO')->length(1)->nullable();
            $table->integer('GRUPOFAT')->length(5)->nullable()->default(0);
            $table->integer('NUMCONTRATO')->length(10)->nullable()->default(0);
            $table->integer('IDALIQICMS')->length(10)->nullable()->default(0);
            $table->float('VLRUNIDPAD')->length(126)->default(0);
            $table->float('VLRUNITMOE')->length(126)->default(0);
            $table->float('VLRUNITLIQ')->length(126)->default(0);
            $table->float('VLRUNITLIQMOE')->length(126)->default(0);
            $table->float('VLRDESCMOE')->length(126)->default(0);
            $table->float('VLRTOTLIQ')->length(126)->default(0);
            $table->float('VLRTOTLIQMOE')->length(126)->default(0);
            $table->float('VLRTOTLIQREF')->length(126)->default(0);
            $table->float('VLRTOTMOE')->length(126)->default(0);
            $table->string('CODVOLPAD')->nullable();
            $table->string('CODVOLPARC')->length(6)->nullable();
            $table->integer('CODENQIPI')->length(5)->nullable()->default(0);
            $table->integer('CODESPECST')->length(10)->nullable()->default(0);
            $table->float('VLRDESCRAT')->length(126)->nullable();
            $table->integer('NUFOP')->length(5)->nullable()->default(0);
            $table->float('BASESUBSTITUNITORIG')->length(126)->nullable();
            $table->float('VLRSUBSTUNITORIG')->length(126)->nullable();
            $table->string('GERAPRODUCAO')->length(1)->default('S' );
            $table->string('CODAGREGACAO')->length(20)->nullable();
            $table->string('INDESCALA')->length(1)->nullable();
            $table->string('CNPJFABRICANTE')->length(14)->nullable();
            $table->float('BASESTFCPINTANT')->length(126)->nullable();
            $table->float('VLRSTFCPINTANT')->length(126)->nullable();
            $table->float('PERCSTFCPINTANT')->length(126)->nullable();
            $table->string('CODBENEFNAUF')->length(10)->nullable();
            $table->float('PERCDESCFORNECEDOR')->length(126)->nullable();
            $table->string('ORIGEMBUSCA')->length(18)->nullable();
            $table->integer('PRODUTOPESQUISADO')->length(10)->nullable()->default(0);
            $table->float('ALIQSTEXTRANOTA')->length(126)->nullable();
            $table->float('BASESTEXTRANOTA')->length(126)->nullable();
            $table->float('QTDTRIBEXPORT')->length(126)->nullable();
            $table->string('CODPROINFO')->length(32)->nullable();
            $table->float('ALIQSTFCPSTANT')->length(126)->nullable();
            $table->float('VLRVENDAPROMO')->length(126)->nullable();
            $table->float('VLRREPREDSEMDESC')->length(126)->nullable();
            $table->integer('CODDOCARRECAD')->length(5)->nullable()->default(0);
            $table->string('NUMDOCARRECAD')->length(30)->nullable();
            $table->float('VLRICMSDIFERIDO')->length(126)->nullable();
            $table->string('TIPOSEPARACAO')->length(1)->nullable();
            $table->float('BASECALCSTEXTRANOTA')->length(126)->nullable();
            $table->float('REDBASEST')->length(126)->nullable();
            $table->float('MARGLUCRO')->length(126)->nullable();
            $table->float('PERCREDVLRIPI')->length(126)->nullable();
            $table->integer('IDALIQICMSDIFICMS')->length(10)->nullable()->default(0);
            $table->string('TIPENTREGA')->length(1)->nullable();
            $table->float('ALIQFETHAB')->length(126)->nullable();
            $table->float('VLRFETHAB')->length(126)->nullable();
            $table->integer('IDALIQICMSAT')->length(10)->nullable()->default(0);
            $table->float('BASEICMSAT')->length(126)->nullable();
            $table->float('ALIQICMSAT')->length(126)->nullable();
            $table->float('ALIQINTERICMSAT')->length(126)->nullable();
            $table->float('VLRICMSAT')->length(126)->nullable();
            $table->integer('IDDESCPARCERIA')->length(19)->nullable()->default(0);
            $table->integer('VLRDESCPARCERIA')->length(18)->nullable()->default(0);
            $table->float('PERCUSAQUDECPE')->length(126)->nullable();
            $table->float('VLRCUSAQUDECPE')->length(126)->nullable();
            $table->float('BASEICMSSTFRETE')->length(126)->nullable();
            $table->float('ICMSSTFRETE')->length(126)->nullable();
            $table->float('VLRREPREDST')->length(126)->nullable();
            $table->string('CODSIT08EFD')->length(1)->nullable();
            $table->integer('TIPUTILCOM')->length(5)->nullable()->default(0);
            $table->string('UNIDADE')->length(6)->nullable();
            $table->float('ALIQFUST')->length(126)->nullable();
            $table->float('BASEFUST')->length(126)->nullable();
            $table->float('VLRFUST')->length(126)->nullable();
            $table->float('ALIQFUNTTEL')->length(126)->nullable();
            $table->float('BASEFUNTTEL')->length(126)->nullable();
            $table->float('VLRFUNTTEL')->length(126)->nullable();
            $table->integer('CODMOTDESONERAST')->length(5)->nullable()->default(0);
            $table->string('CODBARRAPDV')->length(25)->nullable();
            $table->string('CODFCI')->length(36)->nullable();
            $table->float('PERCUSAQUDECPEEST')->length(126)->nullable();
            $table->string('MARCA')->nullable();
            $table->string('AD_IDEXTERNO')->length(100)->nullable();
            $table->string('AD_LOTEREFERENCIA')->length(100)->nullable();

          $table->primary(['NUNOTA', 'SEQUENCIA']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfite');
    }
};
