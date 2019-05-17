<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessMeanCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_mean_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('business_mean_type_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('business_mean_type_id')->references('id')->on('business_mean_types');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('business_mean_categories');
    }
}
