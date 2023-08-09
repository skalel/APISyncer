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
        Schema::create('tsibco', function (Blueprint $table) {
            $table->string('ABREVIATURA')->length(15);
            $table->integer('CODBCO')->length(5)->primary();
            $table->string('NOMEBCO')->length(40);
            $table->integer('CTACMC7INI')->length(5)->nullable();
            $table->integer('CTACMC7FIM')->length(5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsibco');
    }
};
