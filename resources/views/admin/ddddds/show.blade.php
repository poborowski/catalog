@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ddddd.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ddddds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.id') }}
                        </th>
                        <td>
                            {{ $ddddd->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.preview_featured_image') }}
                        </th>
                        <td>
                            @if($ddddd->preview_featured_image)
                                <a href="{{ $ddddd->preview_featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $ddddd->preview_featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.api') }}
                        </th>
                        <td>
                            {{ $ddddd->api }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_id_wordpress') }}
                        </th>
                        <td>
                            {{ $ddddd->product_id_wordpress }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_slug') }}
                        </th>
                        <td>
                            {{ $ddddd->product_slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.status') }}
                        </th>
                        <td>
                            {{ $ddddd->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.sku') }}
                        </th>
                        <td>
                            {{ $ddddd->sku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.ean') }}
                        </th>
                        <td>
                            {{ $ddddd->ean }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.is_personalized') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ddddd->is_personalized ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.show_free_sample_btn') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ddddd->show_free_sample_btn ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_availability') }}
                        </th>
                        <td>
                            {{ $ddddd->product_availability }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.currency') }}
                        </th>
                        <td>
                            {{ $ddddd->currency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.realization_time') }}
                        </th>
                        <td>
                            {{ $ddddd->realization_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.price') }}
                        </th>
                        <td>
                            {{ $ddddd->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.attributes_from_poligrafia_api') }}
                        </th>
                        <td>
                            {{ $ddddd->attributes_from_poligrafia_api }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.change_price_when') }}
                        </th>
                        <td>
                            {{ $ddddd->change_price_when }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.attach_additional_product') }}
                        </th>
                        <td>
                            {{ $ddddd->attach_additional_product }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.disable_from_delivery') }}
                        </th>
                        <td>
                            {{ $ddddd->disable_from_delivery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_rating') }}
                        </th>
                        <td>
                            {{ $ddddd->product_rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.owner') }}
                        </th>
                        <td>
                            {{ $ddddd->owner }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_name') }}
                        </th>
                        <td>
                            {{ $ddddd->product_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_long') }}
                        </th>
                        <td>
                            {{ $ddddd->product_desc_long }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_short') }}
                        </th>
                        <td>
                            {{ $ddddd->product_desc_short }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_dane') }}
                        </th>
                        <td>
                            {{ $ddddd->product_desc_dane }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.images_urls') }}
                        </th>
                        <td>
                            {{ $ddddd->images_urls }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.dimension') }}
                        </th>
                        <td>
                            {{ $ddddd->dimension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.unit') }}
                        </th>
                        <td>
                            {{ $ddddd->unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.tags') }}
                        </th>
                        <td>
                            {{ $ddddd->tags }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_style') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_product_style }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_type') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_product_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_color_dominant') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_color_dominant }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_products_decoration') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_products_decoration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_photo') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_product_photo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_format') }}
                        </th>
                        <td>
                            {{ $ddddd->filters_product_format }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $ddddd->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.meta_desc') }}
                        </th>
                        <td>
                            {{ $ddddd->meta_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.photo_url_feed') }}
                        </th>
                        <td>
                            {{ $ddddd->photo_url_feed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.disable_from_feed') }}
                        </th>
                        <td>
                            {{ $ddddd->disable_from_feed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.categories') }}
                        </th>
                        <td>
                            {{ $ddddd->categories }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_variant_family') }}
                        </th>
                        <td>
                            {{ $ddddd->product_variant_family }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_collection') }}
                        </th>
                        <td>
                            {{ $ddddd->product_collection }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.link_to_org_product') }}
                        </th>
                        <td>
                            {{ $ddddd->link_to_org_product }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_templatebindingtype') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_templatebindingtype }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_templateid') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_templateid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_manufacturer') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_creator_type') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_creator_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_product_code_antigro') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_product_code_antigro }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_product_source') }}
                        </th>
                        <td>
                            {{ $ddddd->poligrafia_product_source }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ddddds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection