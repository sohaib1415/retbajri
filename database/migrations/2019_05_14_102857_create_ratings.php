<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating');
            $table->bigInteger('review_id')->unsigned()->index();
            $table->bigInteger('rating_type_id')->unsigned()->index();
            $table->foreign('review_id')->references('id')->on('reviews');
            $table->foreign('rating_type_id')->references('id')->on('rating_types');
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
        Schema::dropIfExists('ratings');
    }
}
