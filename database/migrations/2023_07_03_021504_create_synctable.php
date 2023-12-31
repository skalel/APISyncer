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
        Schema::create('synctable', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_entity');
            $table->string('name_table');
            $table->string('url');
            $table->text('request_model')->nullable();
            $table->text('expression')->nullable();
            $table->integer('last_synced_offset')->nullable();
            $table->integer('last_fetched_registers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('synctable');
    }
};
