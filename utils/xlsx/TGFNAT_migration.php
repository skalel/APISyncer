<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgfnatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFNAT', function (Blueprint $table) {
            $table->string('DESCRNAT')->length(40);
            $table->string('INCRESULT')->length(1)->default('S' );
            $table->integer('CODCTACTB')->length(10)->nullable()->default(0);
            $table->integer('CODCENCUS')->length(10)->nullable()->default(0);
            $table->integer('CODNATPAI')->length(10)->nullable()->default(0);
            $table->integer('GRAU')->length(5)->nullable()->default(0);
            $table->string('ATIVA')->length(1)->default('S' );
            $table->string('ANALITICA')->length(1)->default('S' );
            $table->integer('CODCTACTB2')->length(10)->nullable()->default(0);
            $table->integer('CODHISTCTB')->length(5)->nullable()->default(0);
            $table->integer('CODHISTCTB2')->length(5)->nullable()->default(0);
            $table->string('GRUPOMKP')->length(30)->nullable();
            $table->string('SUBGRUPOMKP')->length(30)->nullable();
            $table->integer('DECVLR')->length(5)->nullable()->default(0);
            $table->string('FORMULA')->length(4000)->nullable();
            $table->integer('CSTPIS')->length(5)->nullable()->default(0);
            $table->integer('CSTCOFINS')->length(5)->nullable()->default(0);
            $table->string('NATBCCRED')->length(2)->nullable();
            $table->float('ALIQPIS')->length(126)->nullable();
            $table->float('ALIQCOFINS')->length(126)->nullable();
            $table->integer('CODPROD')->length(10)->nullable()->default(0);
            $table->integer('CODSERVUNICO')->length(10)->nullable()->default(0);
            $table->string('REGIMEEFD')->length(1)->default('A' );
            $table->integer('CODGRUPONAT')->length(10)->default(0);
            $table->string('TIPNAT')->length(1)->nullable();
            $table->string('FINREGP100')->length(1)->default('N' );
            $table->string('FINCODATIVP100')->length(8)->nullable();
            $table->integer('CODCTACTBEFD')->length(10)->nullable()->default(0);
            $table->string('GERALCDPR')->length(1)->nullable();
            $table->string('RECADIANTRURAL')->length(1)->nullable();
            $table->integer('NATEFDCONTM410M810')->length(5)->nullable()->default(0);
            $table->string('AD_IMPLIGACAO')->length(10)->nullable();
            $table->string('AD_IDEXTERNO')->length(100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFNAT');
    }
}