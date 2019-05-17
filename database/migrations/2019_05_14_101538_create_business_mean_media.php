<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessMeanMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_mean_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('business_mean_id')->unsigned()->index();
            $table->bigInteger('media_id')->unsigned()->index();
            $table->foreign('business_mean_id')->references('id')->on('business_means');
            $table->foreign('media_id')->references('id')->on('media');
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
        Schema::dropIfExists('business_mean_media');
    }
}
