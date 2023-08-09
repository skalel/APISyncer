<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgftabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFTAB', function (Blueprint $table) {
            $table->integer('CODTAB')->length(5)->default(0.0);
            $table->datetime('DTVIGOR')->length(7);
            $table->integer('CODREG')->length(10)->nullable()->default(0.0);
            $table->datetime('DTALTER')->length(7);
            $table->float('PERCENTUAL')->length(126)->nullable();
            $table->string('FORMULA')->length(4000)->nullable();
            $table->integer('CODTABORIG')->length(5)->nullable()->default(0.0);
            $table->string('JAPE_ID')->length(50)->nullable();
            $table->string('UTILIZADECCUSTO')->length(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFTAB');
    }
}