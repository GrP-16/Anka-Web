<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabularreports', function (Blueprint $table) {
            $table->id();
            $table->string('participantname');
            $table->string('product');
            $table->string('quantitypublished');
            $table->string('quantityleft');
             $table->string('rate');
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabularreports');
    }
};
