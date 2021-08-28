<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('case_number');
            $table->string('case_name');
            $table->string('nature_of_proceeding');
            $table->longText('ruling');
            $table->text('background');
            $table->string('judge');
            $table->timestamp("hearing_date")->nullable();
            $table->string('county');
            $table->string('department');
            $table->string('filed');
            $table->string('category');
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
        Schema::dropIfExists('details');
    }
}
