<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessMeansUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_means_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('unit_id')->unsigned()->index();
            $table->foreign('unit_id')->references('id')->on('units');
            $table->bigInteger('business_mean_id')->unsigned()->index();
            $table->foreign('business_mean_id')->references('id')->on('business_means');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('business_means_units');
    }
}
