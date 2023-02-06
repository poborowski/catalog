<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('api')->nullable();
            $table->string('product_id_wordpress')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('status')->nullable();
            $table->string('sku')->nullable();
            $table->string('ean')->nullable();
            $table->boolean('is_personalized')->default(0)->nullable();
            $table->boolean('show_free_sample_btn')->default(0)->nullable();
            $table->string('product_availability')->nullable();
            $table->string('currency')->nullable();
            $table->string('realization_time')->nullable();
            $table->string('price')->nullable();
            $table->string('attributes_from_poligrafia_api')->nullable();
            $table->string('change_price_when')->nullable();
            $table->string('attach_additional_product')->nullable();
            $table->string('disable_from_delivery')->nullable();
            $table->string('product_rating')->nullable();
            $table->string('owner')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_desc_long')->nullable();
            $table->string('product_desc_short')->nullable();
            $table->string('product_desc_dane')->nullable();
            $table->string('images_urls')->nullable();
            $table->string('dimension')->nullable();
            $table->string('unit')->nullable();
            $table->string('tags')->nullable();
            $table->string('filters_product_style')->nullable();
            $table->string('filters_product_type')->nullable();
            $table->string('filters_color_dominant')->nullable();
            $table->string('filters_products_decoration')->nullable();
            $table->string('filters_product_photo')->nullable();
            $table->string('filters_product_format')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('photo_url_feed')->nullable();
            $table->string('disable_from_feed')->nullable();
            $table->string('categories')->nullable();
            $table->string('product_variant_family')->nullable();
            $table->string('product_collection')->nullable();
            $table->string('link_to_org_product')->nullable();
            $table->string('poligrafia_templatebindingtype')->nullable();
            $table->string('poligrafia_templateid')->nullable();
            $table->string('poligrafia_manufacturer')->nullable();
            $table->string('poligrafia_creator_type')->nullable();
            $table->string('poligrafia_product_code_antigro')->nullable();
            $table->string('poligrafia_product_source')->nullable();
            $table->string('actual_product_url')->nullable();
            $table->string('featured_img')->nullable();
            $table->string('preview_featured_image')->nullable();
            $table->string('contact_filters_products_decoration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
