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
        Schema::create('tgfcfo', function (Blueprint $table) {
            $table->integer('CODCFO')->length(22)->primary();
            $table->string('DESCRCFO')->length(30);
            $table->integer('CODCTACTB')->length(22)->nullable();
            $table->integer('GRUPOCFO')->length(22)->nullable();
            $table->string('CONVPRODUZ')->length(1)->default('N');
            $table->string('TRIBUTADASCIAP')->length(1)->default('N');
            $table->string('TIPICMS')->length(1)->default('1');
            $table->string('CALCDIFICMS')->length(1)->default('S');
            $table->string('TIPO')->length(1)->nullable();
            $table->string('RECBRUTAEFDBLOCOP')->length(1)->default('N');
            $table->string('TIPOPERPRODEPE')->length(1)->nullable();
            $table->string('EMPCODSIT08EFD')->nullable();
            $table->string('MOVIMFISICA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfcfo');
    }
};
