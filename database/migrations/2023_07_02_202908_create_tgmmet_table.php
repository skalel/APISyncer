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
        Schema::create('tgmmet', function (Blueprint $table) {
          $table->integer('CODMETA')->length(22);
          $table->date('DTREF')->length(7)->format('d/m/Y');
          $table->integer('CODPROD')->length(22)->default(0);
          $table->integer('CODGRUPOPROD')->length(22)->default(0);
          $table->integer('CODLOCAL')->length(22)->default(0);
          $table->integer('CODPROJ')->length(22)->default(0);
          $table->integer('CODCENCUS')->length(22)->default(0);
          $table->integer('CODNAT')->length(22)->default(0);
          $table->integer('CODREG')->length(22)->default(0);
          $table->integer('CODGER')->length(22)->default(0);
          $table->integer('CODVEND')->length(22)->default(0);
          $table->integer('CODPARC')->length(22)->default(0);
          $table->integer('CODUF')->length(22)->default(0);
          $table->integer('CODCID')->length(22)->default(0);
          $table->integer('CODPAIS')->length(22)->default(0);
          $table->integer('CODTIPPARC')->length(22)->default(0);
          $table->string('CONTROLE')->length(11)->default(' ');
          $table->string('MARCA')->length(10)->default(' ');
          $table->float('QTDPREV')->length(22)->nullable()->default(0);
          $table->float('PREVREC')->length(22)->nullable()->default(0);
          $table->float('PREVDESP')->length(22)->nullable()->default(0);
          $table->float('QTDREAL')->length(22)->nullable()->default(0);
          $table->float('REALREC')->length(22)->nullable()->default(0);
          $table->float('REALDESP')->length(22)->nullable()->default(0);
          $table->float('PERCENTUAL')->length(22)->nullable()->default(0);
          $table->float('SUPLEMENTODESP')->length(22)->nullable()->default(0);
          $table->float('ANTECIPDESP')->length(22)->nullable()->default(0);
          $table->float('TRANSFDESP')->length(22)->nullable()->default(0);
          $table->float('TRANSFSALDODESP')->length(22)->nullable()->default(0);
          $table->float('REDUCAODESP')->length(22)->nullable()->default(0);
          $table->float('COMPROMISSODESP')->length(22)->nullable()->default(0);
          $table->string('ANALITICO')->length(1)->default('S');
          $table->string('TIPOMSG')->length(1)->default('Z');
          $table->float('PERCAVISO')->length(22)->nullable()->default(0);
          $table->integer('DIA')->length(22)->default(0);
          $table->integer('SEMANAMES')->length(22)->nullable()->default(0);
          $table->float('TOTALAUTINV')->length(22)->default(0);
          $table->string('CODVOL')->length(2)->nullable();
          $table->integer('CODEMP')->length(22)->default(0);
          $table->integer('CODGRUPONAT')->length(22)->default(0);
          $table->datetime('DHALTER')->length(7)->nullable()->format('d/m/Y H:i:s');

          $table->primary(['CODMETA', 'DTREF', 'CODPROD', 'CODLOCAL', 'CODCENCUS', 'CODNAT', 'CODVEND', 'CODPARC', 'CODUF', 'CODCID','CONTROLE', 'CODEMP']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgmmet');
    }
};
