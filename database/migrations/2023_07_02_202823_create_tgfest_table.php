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
        Schema::create('tgfest', function (Blueprint $table) {
            $table->integer('CODEMP')->length(22);
            $table->integer('CODLOCAL')->length(22);
            $table->integer('CODPROD')->length(22);
            $table->string('CONTROLE')->length(20)->default(' ');
            $table->float('RESERVADO')->length(22)->nullable()->default(0);
            $table->float('ESTMIN')->length(22)->default(0);
            $table->float('ESTMAX')->length(22)->default(0);
            $table->string('ATIVO')->length(1)->default('S');
            $table->string('CODBARRA')->length(25)->nullable();
            $table->date('DTVAL')->length(7)->nullable()->format('d/m/Y');
            $table->string('TIPO')->length(1)->default('P');
            $table->integer('CODPARC')->length(22)->default(0);
            $table->float('PERCPUREZA')->length(22)->nullable();
            $table->float('PERCGERMIN')->length(22)->nullable();
            $table->date('DTFABRICACAO')->length(7)->nullable()->format('d/m/Y');
            $table->string('STATUSLOTE')->length(1)->default('N');
            $table->float('ESTOQUE')->length(22)->default(0);
            $table->float('WMSBLOQUEADO')->length(22)->nullable();
            $table->string('CODAGREGACAO')->length(20)->nullable();
            $table->integer('ESTDOCAWMS')->nullable();

            $table->primary(['CODEMP', 'CODLOCAL', 'CODPROD', 'CONTROLE', 'TIPO', 'CODPARC']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfest');
    }
};
