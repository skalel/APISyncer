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
        Schema::create('tgfvar', function (Blueprint $table) {
          $table->integer('NUNOTA')->length(22);
          $table->integer('SEQUENCIA')->length(22);
          $table->integer('NUNOTAORIG')->length(22);
          $table->integer('SEQUENCIAORIG')->length(22);
          $table->float('QTDATENDIDA')->length(22)->nullable();
          $table->float('CUSATEND')->length(22)->nullable();
          $table->integer('ORDEMPROD')->length(22)->nullable();
          $table->string('STATUSNOTA')->length(1)->default('P');
          $table->integer('NROMEMORANDO')->length(22)->nullable();
          $table->string('NROATOCONCDRAW')->length(11)->nullable();
          $table->string('NROREGEXPORT')->length(12)->nullable();

          $table->primary(['NUNOTA', 'SEQUENCIA', 'NUNOTAORIG', 'SEQUENCIAORIG']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgfvar');
    }
};
