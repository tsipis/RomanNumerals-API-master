<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegersAndRomanNumeralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ints_to_romans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('integer');
            $table->string('roman_numeral');
            $table->timestamp('converted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ints_to_romans');
    }
}
