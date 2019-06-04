<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessMeans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_means', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price');
            $table->string('brand', 50)->nullable();
            $table->string('description', 50)->nullable();
            $table->string('minimum_quatity', 50)->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_featured')->default(0);
            $table->integer('cod')->default(0);
            $table->bigInteger('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('business_mean_category_id')->unsigned()->index();
            $table->foreign('business_mean_category_id')->references('id')->on('business_mean_categories');
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
        Schema::dropIfExists('business_means');
    }
}
