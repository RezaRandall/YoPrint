<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoprintImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yoprint_import', function (Blueprint $table) {
            $table->increments('UNIQUE_KEY');
            $table->string('PRODUCT_TITLE');
            $table->longText('PRODUCT_DESCRIPTION');
            $table->string('STYLE#');
            $table->string('AVAILABLE_SIZES');
            $table->string('BRAND_LOGO_IMAGE');
            $table->string('THUMBNAIL_IMAGE');
            $table->string('COLOR_SWATCH_IMAGE');
            $table->string('PRODUCT_IMAGE');
            $table->string('SPEC_SHEET');
            $table->string('PRICE_TEXT');
            $table->integer('SUGGESTED_PRICE');
            $table->string('CATEGORY_NAME');
            $table->string('SUBCATEGORY_NAME');
            $table->string('COLOR_NAME');
            $table->string('COLOR_SQUARE_IMAGE');
            $table->string('COLOR_PRODUCT_IMAGE');
            $table->string('COLOR_PRODUCT_IMAGE_THUMBNAIL');
            $table->string('SIZE');
            $table->integer('QTY');
            $table->double('PIECE_WEIGHT');
            $table->double('PIECE_PRICE');
            $table->double('DOZENS_PRICE');
            $table->double('CASE_PRICE');
            $table->string('PRICE_GROUP');
            $table->integer('CASE_SIZE');
            $table->integer('INVENTORY_KEY');
            $table->integer('SIZE_INDEX');
            $table->string('SANMAR_MAINFRAME_COLOR');
            $table->string('MILL');
            $table->string('PRODUCT_STATUS');
            $table->string('COMPANION_STYLES');
            $table->double('MSRP');
            $table->double('MAP_PRICING')->nullable();
            $table->string('FRONT_MODEL_IMAGE_URL');
            $table->string('BACK_MODEL_IMAGE');
            $table->string('FRONT_FLAT_IMAGE');
            $table->string('BACK_FLAT_IMAGE');
            $table->string('PRODUCT_MEASUREMENTS');
            $table->string('PMS_COLOR')->nullable();
            $table->string('GTIN');
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
        Schema::dropIfExists('yoprint_import');
    }
}
