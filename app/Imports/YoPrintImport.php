<?php

namespace App\Imports;

use App\Models\yoprint_import;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class YoPrintImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new yoprint_import([
            'UNIQUE_KEY'=>$row['unique_key'],
            'PRODUCT_TITLE'=>$row['product_title'],
            'PRODUCT_DESCRIPTION'=>$row['product_description'],
            'STYLE#'=>$row['style'],
            'SANMAR_MAINFRAME_COLOR'=>$row['sanmar_mainframe_color'],
            'SIZE'=>$row['size'],
            'COLOR_NAME'=>$row['color_name'],
            'PIECE_PRICE'=>$row['piece_price'],

            'AVAILABLE_SIZES'=>$row['available_sizes'],
            'BRAND_LOGO_IMAGE'=>$row['brand_logo_image'],
            'THUMBNAIL_IMAGE'=>$row['thumbnail_image'],
            'COLOR_SWATCH_IMAGE'=>$row['color_swatch_image'],
            'PRODUCT_IMAGE'=>$row['product_image'],
            'SPEC_SHEET'=>$row['spec_sheet'],
            'PRICE_TEXT'=>$row['price_text'],
            'SUGGESTED_PRICE'=>$row['suggested_price'],
            'CATEGORY_NAME'=>$row['category_name'],
            'SUBCATEGORY_NAME'=>$row['subcategory_name'],
            'COLOR_SQUARE_IMAGE'=>$row['color_square_image'],
            'COLOR_PRODUCT_IMAGE'=>$row['color_product_image'],
            'COLOR_PRODUCT_IMAGE_THUMBNAIL'=>$row['color_product_image_thumbnail'],
            'QTY'=>$row['qty'],
            'PIECE_WEIGHT'=>$row['piece_weight'],
            'DOZENS_PRICE'=>$row['dozens_price'],
            'CASE_PRICE'=>$row['case_price'],
            'PRICE_GROUP'=>$row['price_group'],
            'CASE_SIZE'=>$row['case_size'],
            'INVENTORY_KEY'=>$row['inventory_key'],
            'SIZE_INDEX'=>$row['size_index'],
            'MILL'=>$row['mill'],
            'PRODUCT_STATUS'=>$row['product_status'],
            'COMPANION_STYLES'=>$row['companion_styles'],
            'MSRP'=>$row['msrp'],
            'MAP_PRICING'=>$row['map_pricing'],
            'FRONT_MODEL_IMAGE_URL'=>$row['front_model_image_url'],
            'BACK_MODEL_IMAGE'=>$row['back_model_image'],
            'FRONT_FLAT_IMAGE'=>$row['front_flat_image'],
            'BACK_FLAT_IMAGE'=>$row['back_flat_image'],
            'PRODUCT_MEASUREMENTS'=>$row['product_measurements'],
            'PMS_COLOR'=>$row['pms_color'],
            'GTIN'=>$row['gtin'],
        ]);
    }
}
