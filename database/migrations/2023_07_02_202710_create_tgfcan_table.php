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
        Schema::create('tgfcan', function (Blueprint $table) {
          $table->integer('NUMNOTA')->length(22);
          $table->integer('CODEMP')->length(22);
          $table->string('SERIENOTA')->length(3)->default(' ');
          $table->date('DTNEG')->length(7)->format('d/m/Y');
          $table->date('DTFATUR')->length(7)->nullable()->format('d/m/Y');
          $table->date('DTMOV')->length(7)->nullable()->format('d/m/Y');
          $table->string('MOTCANCEL')->length(180);
          $table->string('ATUALLIVFIS')->length(1)->nullable()->default('N');
          $table->string('ATUALLIVISS')->length(1)->nullable()->default('N');
          $table->date('DTCANC')->length(7)->format('d/m/Y');
          $table->integer('NUNOTA')->length(22)->nullable();
          $table->integer('CODPARC')->length(22)->default(0);
          $table->integer('CODMODDOC')->length(22)->default(1);
          $table->string('CHAVENFE')->length(44)->nullable();
          $table->string('NUMPROTOCNFE')->length(15)->nullable();
          $table->datetime('DHPROTOCNFE')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->string('NUMPROTOCCAN')->length(15)->nullable();
          $table->datetime('DHPROTOCCAN')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->integer('TPEMISNFE')->length(22)->nullable();
          $table->float('VLRNOTA')->length(22)->nullable();
          $table->integer('CODMAQ')->length(22)->default(0);
          $table->integer('NROREDZ')->length(22)->default(0);
          $table->string('NUMREGDPEC')->length(15)->nullable();
          $table->datetime('DHREGDPEC')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->string('NATUREZAOPERDES')->length(2)->nullable();
          $table->string('SERIENFDES')->length(4)->nullable();
          $table->string('MODELONFDES')->length(2)->nullable();
          $table->integer('NUMCF')->length(22)->nullable();
          $table->string('NUMNFSE')->length(20)->nullable();
          $table->integer('NUREM')->length(22)->nullable();
          $table->string('NUMPROTOCESPONT')->length(15)->nullable();
          $table->datetime('DHPROTOCESPONT')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->string('TPAMBNFE')->length(1)->nullable();
          $table->string('CHAVECTE')->length(44)->nullable();
          $table->string('NUMPROTOCCTE')->length(30)->nullable();
          $table->datetime('DHPROTOCCTE')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->string('NUMPROTOCCANCTE')->length(30)->nullable();
          $table->datetime('DHPROTOCCANCTE')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->integer('TPEMISCTE')->length(22)->nullable();
          $table->string('TPAMBCTE')->length(1)->nullable();
          $table->integer('NUNOTASUB')->length(22)->nullable();
          $table->string('TPAMBNFSE')->length(1)->nullable();
          $table->string('PROTCANCNFSE')->length(44)->nullable();
          $table->datetime('DHCANCPREFNFSE')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->string('TIPCANCNFSE')->length(1)->nullable();

          $table->primary(['NUMNOTA', 'CODEMP', 'SERIENOTA', 'DTNEG', 'CODMAQ']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfcan');
    }
};
