<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeNullableToBusinessMean extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_means', function (Blueprint $table) {
            $table->string('brand', 50)->nullable()->change();
            $table->string('description', 50)->nullable()->change();
            $table->string('minimum_quatity', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_means', function (Blueprint $table) {
            //
        });
    }
}
