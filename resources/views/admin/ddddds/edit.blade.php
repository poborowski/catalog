@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.ddddd.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ddddds.update", [$ddddd->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="preview_featured_image">{{ trans('cruds.ddddd.fields.preview_featured_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('preview_featured_image') ? 'is-invalid' : '' }}" id="preview_featured_image-dropzone">
                </div>
                @if($errors->has('preview_featured_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('preview_featured_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.preview_featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="api">{{ trans('cruds.ddddd.fields.api') }}</label>
                <input class="form-control {{ $errors->has('api') ? 'is-invalid' : '' }}" type="number" name="api" id="api" value="{{ old('api', $ddddd->api) }}" step="1">
                @if($errors->has('api'))
                    <div class="invalid-feedback">
                        {{ $errors->first('api') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.api_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_id_wordpress">{{ trans('cruds.ddddd.fields.product_id_wordpress') }}</label>
                <input class="form-control {{ $errors->has('product_id_wordpress') ? 'is-invalid' : '' }}" type="text" name="product_id_wordpress" id="product_id_wordpress" value="{{ old('product_id_wordpress', $ddddd->product_id_wordpress) }}">
                @if($errors->has('product_id_wordpress'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_id_wordpress') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_id_wordpress_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_slug">{{ trans('cruds.ddddd.fields.product_slug') }}</label>
                <input class="form-control {{ $errors->has('product_slug') ? 'is-invalid' : '' }}" type="text" name="product_slug" id="product_slug" value="{{ old('product_slug', $ddddd->product_slug) }}">
                @if($errors->has('product_slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.ddddd.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $ddddd->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sku">{{ trans('cruds.ddddd.fields.sku') }}</label>
                <input class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}" type="text" name="sku" id="sku" value="{{ old('sku', $ddddd->sku) }}">
                @if($errors->has('sku'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sku') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.sku_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ean">{{ trans('cruds.ddddd.fields.ean') }}</label>
                <input class="form-control {{ $errors->has('ean') ? 'is-invalid' : '' }}" type="text" name="ean" id="ean" value="{{ old('ean', $ddddd->ean) }}">
                @if($errors->has('ean'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ean') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.ean_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_personalized') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_personalized" value="0">
                    <input class="form-check-input" type="checkbox" name="is_personalized" id="is_personalized" value="1" {{ $ddddd->is_personalized || old('is_personalized', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_personalized">{{ trans('cruds.ddddd.fields.is_personalized') }}</label>
                </div>
                @if($errors->has('is_personalized'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_personalized') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.is_personalized_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('show_free_sample_btn') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="show_free_sample_btn" value="0">
                    <input class="form-check-input" type="checkbox" name="show_free_sample_btn" id="show_free_sample_btn" value="1" {{ $ddddd->show_free_sample_btn || old('show_free_sample_btn', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="show_free_sample_btn">{{ trans('cruds.ddddd.fields.show_free_sample_btn') }}</label>
                </div>
                @if($errors->has('show_free_sample_btn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_free_sample_btn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.show_free_sample_btn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_availability">{{ trans('cruds.ddddd.fields.product_availability') }}</label>
                <input class="form-control {{ $errors->has('product_availability') ? 'is-invalid' : '' }}" type="text" name="product_availability" id="product_availability" value="{{ old('product_availability', $ddddd->product_availability) }}">
                @if($errors->has('product_availability'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_availability') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_availability_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency">{{ trans('cruds.ddddd.fields.currency') }}</label>
                <input class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" type="text" name="currency" id="currency" value="{{ old('currency', $ddddd->currency) }}">
                @if($errors->has('currency'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="realization_time">{{ trans('cruds.ddddd.fields.realization_time') }}</label>
                <input class="form-control {{ $errors->has('realization_time') ? 'is-invalid' : '' }}" type="text" name="realization_time" id="realization_time" value="{{ old('realization_time', $ddddd->realization_time) }}">
                @if($errors->has('realization_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('realization_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.realization_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.ddddd.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', $ddddd->price) }}">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="attributes_from_poligrafia_api">{{ trans('cruds.ddddd.fields.attributes_from_poligrafia_api') }}</label>
                <input class="form-control {{ $errors->has('attributes_from_poligrafia_api') ? 'is-invalid' : '' }}" type="text" name="attributes_from_poligrafia_api" id="attributes_from_poligrafia_api" value="{{ old('attributes_from_poligrafia_api', $ddddd->attributes_from_poligrafia_api) }}">
                @if($errors->has('attributes_from_poligrafia_api'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attributes_from_poligrafia_api') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.attributes_from_poligrafia_api_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="change_price_when">{{ trans('cruds.ddddd.fields.change_price_when') }}</label>
                <input class="form-control {{ $errors->has('change_price_when') ? 'is-invalid' : '' }}" type="text" name="change_price_when" id="change_price_when" value="{{ old('change_price_when', $ddddd->change_price_when) }}">
                @if($errors->has('change_price_when'))
                    <div class="invalid-feedback">
                        {{ $errors->first('change_price_when') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.change_price_when_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="attach_additional_product">{{ trans('cruds.ddddd.fields.attach_additional_product') }}</label>
                <input class="form-control {{ $errors->has('attach_additional_product') ? 'is-invalid' : '' }}" type="text" name="attach_additional_product" id="attach_additional_product" value="{{ old('attach_additional_product', $ddddd->attach_additional_product) }}">
                @if($errors->has('attach_additional_product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attach_additional_product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.attach_additional_product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="disable_from_delivery">{{ trans('cruds.ddddd.fields.disable_from_delivery') }}</label>
                <input class="form-control {{ $errors->has('disable_from_delivery') ? 'is-invalid' : '' }}" type="text" name="disable_from_delivery" id="disable_from_delivery" value="{{ old('disable_from_delivery', $ddddd->disable_from_delivery) }}">
                @if($errors->has('disable_from_delivery'))
                    <div class="invalid-feedback">
                        {{ $errors->first('disable_from_delivery') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.disable_from_delivery_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_rating">{{ trans('cruds.ddddd.fields.product_rating') }}</label>
                <input class="form-control {{ $errors->has('product_rating') ? 'is-invalid' : '' }}" type="text" name="product_rating" id="product_rating" value="{{ old('product_rating', $ddddd->product_rating) }}">
                @if($errors->has('product_rating'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_rating') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_rating_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="owner">{{ trans('cruds.ddddd.fields.owner') }}</label>
                <input class="form-control {{ $errors->has('owner') ? 'is-invalid' : '' }}" type="text" name="owner" id="owner" value="{{ old('owner', $ddddd->owner) }}">
                @if($errors->has('owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('owner') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.owner_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_name">{{ trans('cruds.ddddd.fields.product_name') }}</label>
                <input class="form-control {{ $errors->has('product_name') ? 'is-invalid' : '' }}" type="text" name="product_name" id="product_name" value="{{ old('product_name', $ddddd->product_name) }}">
                @if($errors->has('product_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_desc_long">{{ trans('cruds.ddddd.fields.product_desc_long') }}</label>
                <input class="form-control {{ $errors->has('product_desc_long') ? 'is-invalid' : '' }}" type="text" name="product_desc_long" id="product_desc_long" value="{{ old('product_desc_long', $ddddd->product_desc_long) }}">
                @if($errors->has('product_desc_long'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_desc_long') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_desc_long_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_desc_short">{{ trans('cruds.ddddd.fields.product_desc_short') }}</label>
                <input class="form-control {{ $errors->has('product_desc_short') ? 'is-invalid' : '' }}" type="text" name="product_desc_short" id="product_desc_short" value="{{ old('product_desc_short', $ddddd->product_desc_short) }}">
                @if($errors->has('product_desc_short'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_desc_short') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_desc_short_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_desc_dane">{{ trans('cruds.ddddd.fields.product_desc_dane') }}</label>
                <input class="form-control {{ $errors->has('product_desc_dane') ? 'is-invalid' : '' }}" type="text" name="product_desc_dane" id="product_desc_dane" value="{{ old('product_desc_dane', $ddddd->product_desc_dane) }}">
                @if($errors->has('product_desc_dane'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_desc_dane') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_desc_dane_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="images_urls">{{ trans('cruds.ddddd.fields.images_urls') }}</label>
                <input class="form-control {{ $errors->has('images_urls') ? 'is-invalid' : '' }}" type="text" name="images_urls" id="images_urls" value="{{ old('images_urls', $ddddd->images_urls) }}">
                @if($errors->has('images_urls'))
                    <div class="invalid-feedback">
                        {{ $errors->first('images_urls') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.images_urls_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dimension">{{ trans('cruds.ddddd.fields.dimension') }}</label>
                <input class="form-control {{ $errors->has('dimension') ? 'is-invalid' : '' }}" type="text" name="dimension" id="dimension" value="{{ old('dimension', $ddddd->dimension) }}">
                @if($errors->has('dimension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dimension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.dimension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit">{{ trans('cruds.ddddd.fields.unit') }}</label>
                <input class="form-control {{ $errors->has('unit') ? 'is-invalid' : '' }}" type="text" name="unit" id="unit" value="{{ old('unit', $ddddd->unit) }}">
                @if($errors->has('unit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tags">{{ trans('cruds.ddddd.fields.tags') }}</label>
                <input class="form-control {{ $errors->has('tags') ? 'is-invalid' : '' }}" type="text" name="tags" id="tags" value="{{ old('tags', $ddddd->tags) }}">
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.tags_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_product_style">{{ trans('cruds.ddddd.fields.filters_product_style') }}</label>
                <input class="form-control {{ $errors->has('filters_product_style') ? 'is-invalid' : '' }}" type="text" name="filters_product_style" id="filters_product_style" value="{{ old('filters_product_style', $ddddd->filters_product_style) }}">
                @if($errors->has('filters_product_style'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_product_style') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_product_style_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_product_type">{{ trans('cruds.ddddd.fields.filters_product_type') }}</label>
                <input class="form-control {{ $errors->has('filters_product_type') ? 'is-invalid' : '' }}" type="text" name="filters_product_type" id="filters_product_type" value="{{ old('filters_product_type', $ddddd->filters_product_type) }}">
                @if($errors->has('filters_product_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_product_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_product_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_color_dominant">{{ trans('cruds.ddddd.fields.filters_color_dominant') }}</label>
                <input class="form-control {{ $errors->has('filters_color_dominant') ? 'is-invalid' : '' }}" type="text" name="filters_color_dominant" id="filters_color_dominant" value="{{ old('filters_color_dominant', $ddddd->filters_color_dominant) }}">
                @if($errors->has('filters_color_dominant'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_color_dominant') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_color_dominant_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_products_decoration">{{ trans('cruds.ddddd.fields.filters_products_decoration') }}</label>
                <input class="form-control {{ $errors->has('filters_products_decoration') ? 'is-invalid' : '' }}" type="text" name="filters_products_decoration" id="filters_products_decoration" value="{{ old('filters_products_decoration', $ddddd->filters_products_decoration) }}">
                @if($errors->has('filters_products_decoration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_products_decoration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_products_decoration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_product_photo">{{ trans('cruds.ddddd.fields.filters_product_photo') }}</label>
                <input class="form-control {{ $errors->has('filters_product_photo') ? 'is-invalid' : '' }}" type="text" name="filters_product_photo" id="filters_product_photo" value="{{ old('filters_product_photo', $ddddd->filters_product_photo) }}">
                @if($errors->has('filters_product_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_product_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_product_photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="filters_product_format">{{ trans('cruds.ddddd.fields.filters_product_format') }}</label>
                <input class="form-control {{ $errors->has('filters_product_format') ? 'is-invalid' : '' }}" type="text" name="filters_product_format" id="filters_product_format" value="{{ old('filters_product_format', $ddddd->filters_product_format) }}">
                @if($errors->has('filters_product_format'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filters_product_format') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.filters_product_format_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_title">{{ trans('cruds.ddddd.fields.meta_title') }}</label>
                <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $ddddd->meta_title) }}">
                @if($errors->has('meta_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.meta_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_desc">{{ trans('cruds.ddddd.fields.meta_desc') }}</label>
                <input class="form-control {{ $errors->has('meta_desc') ? 'is-invalid' : '' }}" type="text" name="meta_desc" id="meta_desc" value="{{ old('meta_desc', $ddddd->meta_desc) }}">
                @if($errors->has('meta_desc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_desc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.meta_desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_url_feed">{{ trans('cruds.ddddd.fields.photo_url_feed') }}</label>
                <input class="form-control {{ $errors->has('photo_url_feed') ? 'is-invalid' : '' }}" type="text" name="photo_url_feed" id="photo_url_feed" value="{{ old('photo_url_feed', $ddddd->photo_url_feed) }}">
                @if($errors->has('photo_url_feed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_url_feed') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.photo_url_feed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="disable_from_feed">{{ trans('cruds.ddddd.fields.disable_from_feed') }}</label>
                <input class="form-control {{ $errors->has('disable_from_feed') ? 'is-invalid' : '' }}" type="text" name="disable_from_feed" id="disable_from_feed" value="{{ old('disable_from_feed', $ddddd->disable_from_feed) }}">
                @if($errors->has('disable_from_feed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('disable_from_feed') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.disable_from_feed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="categories">{{ trans('cruds.ddddd.fields.categories') }}</label>
                <input class="form-control {{ $errors->has('categories') ? 'is-invalid' : '' }}" type="text" name="categories" id="categories" value="{{ old('categories', $ddddd->categories) }}">
                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.categories_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_variant_family">{{ trans('cruds.ddddd.fields.product_variant_family') }}</label>
                <input class="form-control {{ $errors->has('product_variant_family') ? 'is-invalid' : '' }}" type="text" name="product_variant_family" id="product_variant_family" value="{{ old('product_variant_family', $ddddd->product_variant_family) }}">
                @if($errors->has('product_variant_family'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_variant_family') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_variant_family_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_collection">{{ trans('cruds.ddddd.fields.product_collection') }}</label>
                <input class="form-control {{ $errors->has('product_collection') ? 'is-invalid' : '' }}" type="text" name="product_collection" id="product_collection" value="{{ old('product_collection', $ddddd->product_collection) }}">
                @if($errors->has('product_collection'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_collection') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.product_collection_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_to_org_product">{{ trans('cruds.ddddd.fields.link_to_org_product') }}</label>
                <input class="form-control {{ $errors->has('link_to_org_product') ? 'is-invalid' : '' }}" type="text" name="link_to_org_product" id="link_to_org_product" value="{{ old('link_to_org_product', $ddddd->link_to_org_product) }}">
                @if($errors->has('link_to_org_product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_to_org_product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.link_to_org_product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_templatebindingtype">{{ trans('cruds.ddddd.fields.poligrafia_templatebindingtype') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_templatebindingtype') ? 'is-invalid' : '' }}" type="text" name="poligrafia_templatebindingtype" id="poligrafia_templatebindingtype" value="{{ old('poligrafia_templatebindingtype', $ddddd->poligrafia_templatebindingtype) }}">
                @if($errors->has('poligrafia_templatebindingtype'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_templatebindingtype') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_templatebindingtype_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_templateid">{{ trans('cruds.ddddd.fields.poligrafia_templateid') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_templateid') ? 'is-invalid' : '' }}" type="text" name="poligrafia_templateid" id="poligrafia_templateid" value="{{ old('poligrafia_templateid', $ddddd->poligrafia_templateid) }}">
                @if($errors->has('poligrafia_templateid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_templateid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_templateid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_manufacturer">{{ trans('cruds.ddddd.fields.poligrafia_manufacturer') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_manufacturer') ? 'is-invalid' : '' }}" type="text" name="poligrafia_manufacturer" id="poligrafia_manufacturer" value="{{ old('poligrafia_manufacturer', $ddddd->poligrafia_manufacturer) }}">
                @if($errors->has('poligrafia_manufacturer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_manufacturer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_manufacturer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_creator_type">{{ trans('cruds.ddddd.fields.poligrafia_creator_type') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_creator_type') ? 'is-invalid' : '' }}" type="text" name="poligrafia_creator_type" id="poligrafia_creator_type" value="{{ old('poligrafia_creator_type', $ddddd->poligrafia_creator_type) }}">
                @if($errors->has('poligrafia_creator_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_creator_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_creator_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_product_code_antigro">{{ trans('cruds.ddddd.fields.poligrafia_product_code_antigro') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_product_code_antigro') ? 'is-invalid' : '' }}" type="text" name="poligrafia_product_code_antigro" id="poligrafia_product_code_antigro" value="{{ old('poligrafia_product_code_antigro', $ddddd->poligrafia_product_code_antigro) }}">
                @if($errors->has('poligrafia_product_code_antigro'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_product_code_antigro') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_product_code_antigro_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="poligrafia_product_source">{{ trans('cruds.ddddd.fields.poligrafia_product_source') }}</label>
                <input class="form-control {{ $errors->has('poligrafia_product_source') ? 'is-invalid' : '' }}" type="text" name="poligrafia_product_source" id="poligrafia_product_source" value="{{ old('poligrafia_product_source', $ddddd->poligrafia_product_source) }}">
                @if($errors->has('poligrafia_product_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poligrafia_product_source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ddddd.fields.poligrafia_product_source_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.previewFeaturedImageDropzone = {
    url: '{{ route('admin.ddddds.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="preview_featured_image"]').remove()
      $('form').append('<input type="hidden" name="preview_featured_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="preview_featured_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($ddddd) && $ddddd->preview_featured_image)
      var file = {!! json_encode($ddddd->preview_featured_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="preview_featured_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection