<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgfvarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TGFVAR', function (Blueprint $table) {
            $table->integer('SEQUENCIA')->primary()->length(5)->default(0);
            $table->integer('NUNOTAORIG')->primary()->length(10)->default(0);
            $table->integer('SEQUENCIAORIG')->primary()->length(5)->default(0);
            $table->float('QTDATENDIDA')->length(126)->nullable();
            $table->float('CUSATEND')->length(126)->nullable();
            $table->integer('ORDEMPROD')->length(5)->nullable()->default(0);
            $table->string('STATUSNOTA')->length(1)->default('P' );
            $table->string('FIXACAO')->length(1)->nullable();
            $table->integer('NROMEMORANDO')->length(10)->nullable()->default(0);
            $table->string('NROREGEXPORT')->length(12)->nullable();
            $table->string('NROATOCONCDRAW')->length(11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TGFVAR');
    }
}