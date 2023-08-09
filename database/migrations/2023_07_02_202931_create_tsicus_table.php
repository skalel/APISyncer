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
        Schema::create('tsicus', function (Blueprint $table) {
          $table->integer('CODCENCUS')->length(22)->primary();
          $table->string('DESCRCENCUS')->length(50);
          $table->integer('CODCENCUSPAI')->length(22);
          $table->string('ATIVO')->length(1)->default('S');
          $table->string('ANALITICO')->length(1)->default('S');
          $table->integer('GRAU')->length(22);
          $table->integer('CODUSURESP')->length(22)->default(0);
          $table->float('AREA')->length(22)->nullable();
          $table->integer('CODPARC')->length(22)->default(0);
          $table->integer('CODTAB')->length(22)->default(0);
          $table->datetime('DTINCLUSAO')->length(7)->nullable()->format('d/m/Y H:i:s');
          $table->integer('CODUNN')->length(22)->nullable();
          $table->float('FRACGEREN')->length(22)->nullable();
          $table->float('FRACCONT')->length(22)->nullable();
          $table->float('AREAPERM')->length(22)->nullable();
          $table->float('AREACONT')->length(22)->nullable();
          $table->float('AREAREAL')->length(22)->nullable();
          $table->integer('CODUNG')->length(22)->nullable();
          $table->string('VEICULO')->length(1)->default('N');
          $table->integer('CODPARCRESP')->length(22)->nullable();
          $table->string('AD_IDEXTERNO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsicus');
    }
};
