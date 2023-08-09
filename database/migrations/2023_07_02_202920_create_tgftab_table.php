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
        Schema::create('tgftab', function (Blueprint $table) {
          $table->integer('NUTAB')->length(22)->primary();
          $table->integer('CODTAB')->length(22);
          $table->date('DTVIGOR')->length(7)->format('d/m/Y');
          $table->date('DTALTER')->length(7)->format('d/m/Y');
          $table->float('PERCENTUAL')->length(22)->nullable();
          $table->integer('CODTABORIG')->length(22)->nullable();
          $table->string('JAPE_ID')->length(50)->nullable();
          $table->string('UTILIZADECCUSTO')->length(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgftab');
    }
};
