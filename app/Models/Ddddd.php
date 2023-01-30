<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Ddddd extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'ddddds';

    protected $appends = [
        'preview_featured_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'api',
        'product_id_wordpress',
        'product_slug',
        'status',
        'sku',
        'ean',
        'is_personalized',
        'show_free_sample_btn',
        'product_availability',
        'currency',
        'realization_time',
        'price',
        'attributes_from_poligrafia_api',
        'change_price_when',
        'attach_additional_product',
        'disable_from_delivery',
        'product_rating',
        'owner',
        'product_name',
        'product_desc_long',
        'product_desc_short',
        'product_desc_dane',
        'images_urls',
        'dimension',
        'unit',
        'tags',
        'filters_product_style',
        'filters_product_type',
        'filters_color_dominant',
        'filters_products_decoration',
        'filters_product_photo',
        'filters_product_format',
        'meta_title',
        'meta_desc',
        'photo_url_feed',
        'disable_from_feed',
        'categories',
        'product_variant_family',
        'product_collection',
        'link_to_org_product',
        'poligrafia_templatebindingtype',
        'poligrafia_templateid',
        'poligrafia_manufacturer',
        'poligrafia_creator_type',
        'poligrafia_product_code_antigro',
        'poligrafia_product_source',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPreviewFeaturedImageAttribute()
    {
        $file = $this->getMedia('preview_featured_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
