<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoprintDataListUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yoprint_data_list_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('file');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yoprint_data_list_upload');
    }
}
