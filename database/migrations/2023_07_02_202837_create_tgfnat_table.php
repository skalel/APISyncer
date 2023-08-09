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
        Schema::create('tgfnat', function (Blueprint $table) {
          $table->integer('CODNAT')->length(22)->primary();
          $table->string('DESCRNAT')->length(40);
          $table->string('INCRESULT')->length(1)->default('S');
          $table->integer('CODCTACTB')->length(22)->nullable();
          $table->integer('CODCENCUS')->length(22)->nullable();
          $table->integer('CODNATPAI')->length(22)->nullable();
          $table->integer('GRAU')->length(22)->nullable();
          $table->string('ATIVA')->length(1)->default('S');
          $table->string('ANALITICA')->length(1)->default('S');
          $table->integer('CODCTACTB2')->length(22)->nullable();
          $table->integer('CODHISTCTB')->length(22)->nullable();
          $table->integer('CODHISTCTB2')->length(22)->nullable();
          $table->string('GRUPOMKP')->length(30)->nullable();
          $table->string('SUBGRUPOMKP')->length(30)->nullable();
          $table->integer('DECVLR')->length(22)->nullable();
          $table->string('FORMULA')->length(4000)->nullable();
          $table->integer('CSTPIS')->length(22)->nullable();
          $table->integer('CSTCOFINS')->length(22)->nullable();
          $table->string('NATBCCRED')->length(2)->nullable();
          $table->float('ALIQPIS')->length(22)->nullable();
          $table->float('ALIQCOFINS')->length(22)->nullable();
          $table->integer('CODSERVUNICO')->length(22)->nullable();
          $table->string('REGIMEEFD')->length(1)->default('A');
          $table->integer('CODGRUPONAT')->length(22)->default(0);
          $table->string('TIPNAT')->length(1)->nullable();
          $table->integer('CODCTACTBEFD')->length(22)->nullable();
          $table->string('AD_IMPLIGACAO')->nullable();
          $table->string('AD_IDEXTERNO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfnat');
    }
};
