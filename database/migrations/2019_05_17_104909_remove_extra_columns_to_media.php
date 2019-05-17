<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveExtraColumnsToMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('media', function (Blueprint $table) {
            $table->dropColumn('total_time');
            $table->dropColumn('mime_type');
            $table->dropColumn('thumbnail');
            $table->dropColumn('file_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('total_time');
            $table->string('mime_type');
            $table->string('thumbnail');
            $table->string('file_size');
        });
    }
}
