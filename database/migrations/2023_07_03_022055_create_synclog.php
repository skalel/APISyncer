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
        Schema::create('synclog', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->string('name_table');
            $table->string('status')->length(100);
            $table->text('error')->length(24000)->nullable();
            $table->datetime('execution_date')->default(DB::raw('getutcdate()'));

            $table->foreign('table_id')->references('id')->on('synctable')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('synclog');
    }
};
