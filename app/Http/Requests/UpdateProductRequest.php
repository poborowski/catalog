<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'api' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'product_id_wordpress' => [
                'string',
                'nullable',
            ],
            'product_slug' => [
                'string',
                'nullable',
            ],
            'status' => [
                'string',
                'nullable',
            ],
            'sku' => [
                'string',
                'nullable',
            ],
            'ean' => [
                'string',
                'nullable',
            ],
            'product_availability' => [
                'string',
                'nullable',
            ],
            'currency' => [
                'string',
                'nullable',
            ],
            'realization_time' => [
                'string',
                'nullable',
            ],
            'price' => [
                'string',
                'nullable',
            ],
            'attributes_from_poligrafia_api' => [
                'string',
                'nullable',
            ],
            'change_price_when' => [
                'string',
                'nullable',
            ],
            'attach_additional_product' => [
                'string',
                'nullable',
            ],
            'disable_from_delivery' => [
                'string',
                'nullable',
            ],
            'product_rating' => [
                'string',
                'nullable',
            ],
            'owner' => [
                'string',
                'nullable',
            ],
            'product_name' => [
                'string',
                'nullable',
            ],
            'product_desc_long' => [
                'string',
                'nullable',
            ],
            'product_desc_short' => [
                'string',
                'nullable',
            ],
            'product_desc_dane' => [
                'string',
                'nullable',
            ],
            'images_urls' => [
                'string',
                'nullable',
            ],
            'dimension' => [
                'string',
                'nullable',
            ],
            'unit' => [
                'string',
                'nullable',
            ],
            'tags' => [
                'string',
                'nullable',
            ],
            'filters_product_style' => [
                'string',
                'nullable',
            ],
            'filters_product_type' => [
                'string',
                'nullable',
            ],
            'filters_color_dominant' => [
                'string',
                'nullable',
            ],
            'filters_products_decoration' => [
                'string',
                'nullable',
            ],
            'filters_product_photo' => [
                'string',
                'nullable',
            ],
            'filters_product_format' => [
                'string',
                'nullable',
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
            'meta_desc' => [
                'string',
                'nullable',
            ],
            'photo_url_feed' => [
                'string',
                'nullable',
            ],
            'disable_from_feed' => [
                'string',
                'nullable',
            ],
            'categories' => [
                'string',
                'nullable',
            ],
            'product_variant_family' => [
                'string',
                'nullable',
            ],
            'product_collection' => [
                'string',
                'nullable',
            ],
            'link_to_org_product' => [
                'string',
                'nullable',
            ],
            'poligrafia_templatebindingtype' => [
                'string',
                'nullable',
            ],
            'poligrafia_templateid' => [
                'string',
                'nullable',
            ],
            'poligrafia_manufacturer' => [
                'string',
                'nullable',
            ],
            'poligrafia_creator_type' => [
                'string',
                'nullable',
            ],
            'poligrafia_product_code_antigro' => [
                'string',
                'nullable',
            ],
            'poligrafia_product_source' => [
                'string',
                'nullable',
            ],
            'actual_product_url' => [
                'string',
                'nullable',
            ],
            'featured_img' => [
                'string',
                'nullable',
            ],
            'preview_featured_image' => [
                'string',
                'nullable',
            ],
            'contact_filters_products_decoration' => [
                'string',
                'nullable',
            ],
            'delete' => [
                'string',
                'nullable',
            ],
        ];
    }
}
