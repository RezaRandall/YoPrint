<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yoprint_import extends Model
{
    use HasFactory;

    protected $table = "yoprint_import";

    protected $fillable = [
        'UNIQUE_KEY',
        'PRODUCT_TITLE',
        'PRODUCT_DESCRIPTION',
        'STYLE#',
        'SANMAR_MAINFRAME_COLOR',
        'SIZE',
        'COLOR_NAME',
        'PIECE_PRICE',

        'AVAILABLE_SIZES',
        'BRAND_LOGO_IMAGE',
        'THUMBNAIL_IMAGE',
        'COLOR_SWATCH_IMAGE',
        'PRODUCT_IMAGE',
    	'SPEC_SHEET',
        'PRICE_TEXT',
        'SUGGESTED_PRICE',
        'CATEGORY_NAME',
        'SUBCATEGORY_NAME',
        'COLOR_SQUARE_IMAGE',
        'COLOR_PRODUCT_IMAGE',
        'COLOR_PRODUCT_IMAGE_THUMBNAIL',
        'QTY',
        'PIECE_WEIGHT',
        'DOZENS_PRICE',
        'CASE_PRICE',
        'PRICE_GROUP',
        'CASE_SIZE',
        'INVENTORY_KEY',
        'SIZE_INDEX',
        'MILL',
        'PRODUCT_STATUS',
        'COMPANION_STYLES',
        'MSRP',
        'MAP_PRICING',
        'FRONT_MODEL_IMAGE_URL',
        'BACK_MODEL_IMAGE',
        'FRONT_FLAT_IMAGE',
        'BACK_FLAT_IMAGE',
        'PRODUCT_MEASUREMENTS',
        'PMS_COLOR',
        'GTIN'
    ];

        // public static function getYoPrintImport(){
        //     $records = DB::table('yoprint_import')->select(
        //         'UNIQUE_KEY',
        //         'PRODUCT_TITLE',
        //         'PRODUCT_DESCRIPTION',
        //         'STYLE#',
        //         'AVAILABLE_SIZES',
        //         'BRAND_LOGO_IMAGE',
        //         'THUMBNAIL_IMAGE',
        //         'COLOR_SWATCH_IMAGE',
        //         'PRODUCT_IMAGE',
        //         'SPEC_SHEET',
        //         'PRICE_TEXT',
        //         'SUGGESTED_PRICE',
        //         'CATEGORY_NAME',
        //         'SUBCATEGORY_NAME',
        //         'COLOR_NAME',
        //         'COLOR_SQUARE_IMAGE',
        //         'COLOR_PRODUCT_IMAGE',
        //         'COLOR_PRODUCT_IMAGE_THUMBNAIL',
        //         'SIZE',
        //         'QTY',
        //         'PIECE_WEIGHT',
        //         'PIECE_PRICE',
        //         'DOZENS_PRICE',
        //         'CASE_PRICE',
        //         'PRICE_GROUP',
        //         'CASE_SIZE',
        //         'INVENTORY_KEY',
        //         'SIZE_INDEX',
        //         'SANMAR_MAINFRAME_COLOR',
        //         'MILL',
        //         'PRODUCT_STATUS',
        //         'COMPANION_STYLES',
        //         'MSRP',
        //         'MAP_PRICING',
        //         'FRONT_MODEL_IMAGE_URL',
        //         'BACK_MODEL_IMAGE',
        //         'FRONT_FLAT_IMAGE',
        //         'BACK_FLAT_IMAGE',
        //         'PRODUCT_MEASUREMENTS',
        //         'PMS_COLOR',
        //         'GTIN');
        // }
}
