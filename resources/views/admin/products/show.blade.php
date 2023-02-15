@extends('layouts.admin')
@section('content')
<div class="chooseShop">
    <a href="/first">Pierwszy sklep</a>
    <a href="/first">Drugi sklep</a>
    <a href="/first">Trzeci sklep</a>
</div>

@dd($products)


<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped editProduct">
                <tbody>

                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.actual_product_url') }}
                        </th>
                        <td>
                            {{ $product->actual_product_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.preview_featured_image') }}
                        </th>
                        <td>
                            {{ $product->preview_featured_image }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.contact_filters_products_decoration') }}
                        </th>
                        <td>
                            {{ $product->contact_filters_products_decoration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.featured_img') }}
                        </th>
                        <td>
                            {{ $product->featured_img }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.api') }}
                        </th>
                        <td>
                            {{ $product->api }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_id_wordpress') }}
                        </th>
                        <td>
                            {{ $product->product_id_wordpress }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_slug') }}
                        </th>
                        <td>
                            {{ $product->product_slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.status') }}
                        </th>
                        <td>
                            {{ $product->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.sku') }}
                        </th>
                        <td>
                            {{ $product->sku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ean') }}
                        </th>
                        <td>
                            {{ $product->ean }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.is_personalized') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $product->is_personalized ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.show_free_sample_btn') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $product->show_free_sample_btn ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_availability') }}
                        </th>
                        <td>
                            {{ $product->product_availability }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.currency') }}
                        </th>
                        <td>
                            {{ $product->currency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.realization_time') }}
                        </th>
                        <td>
                            {{ $product->realization_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <td>
                            {{ $product->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.attributes_from_poligrafia_api') }}
                        </th>
                        <td>
                            {{ $product->attributes_from_poligrafia_api }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.change_price_when') }}
                        </th>
                        <td>
                            {{ $product->change_price_when }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.attach_additional_product') }}
                        </th>
                        <td>
                            {{ $product->attach_additional_product }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.disable_from_delivery') }}
                        </th>
                        <td>
                            {{ $product->disable_from_delivery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_rating') }}
                        </th>
                        <td>
                            {{ $product->product_rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.owner') }}
                        </th>
                        <td>
                            {{ $product->owner }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_name') }}
                        </th>
                        <td>
                            {{ $product->product_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_long') }}
                        </th>
                        <td>
                            {{ $product->product_desc_long }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_short') }}
                        </th>
                        <td>
                            {{ $product->product_desc_short }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_dane') }}
                        </th>
                        <td>
                            {{ $product->product_desc_dane }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.images_urls') }}
                        </th>
                        <td>
                            {{ $product->images_urls }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.dimension') }}
                        </th>
                        <td>
                            {{ $product->dimension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.unit') }}
                        </th>
                        <td>
                            {{ $product->unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.tags') }}
                        </th>
                        <td>
                            {{ $product->tags }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_style') }}
                        </th>
                        <td>
                            {{ $product->filters_product_style }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_type') }}
                        </th>
                        <td>
                            {{ $product->filters_product_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_color_dominant') }}
                        </th>
                        <td>
                            {{ $product->filters_color_dominant }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_products_decoration') }}
                        </th>
                        <td>
                            {{ $product->filters_products_decoration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_photo') }}
                        </th>
                        <td>
                            {{ $product->filters_product_photo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_format') }}
                        </th>
                        <td>
                            {{ $product->filters_product_format }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $product->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.meta_desc') }}
                        </th>
                        <td>
                            {{ $product->meta_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_url_feed') }}
                        </th>
                        <td>
                            {{ $product->photo_url_feed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.disable_from_feed') }}
                        </th>
                        <td>
                            {{ $product->disable_from_feed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.categories') }}
                        </th>
                        <td>
                            {{ $product->categories }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_variant_family') }}
                        </th>
                        <td>
                            {{ $product->product_variant_family }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.product_collection') }}
                        </th>
                        <td>
                            {{ $product->product_collection }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.link_to_org_product') }}
                        </th>
                        <td>
                            {{ $product->link_to_org_product }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_templatebindingtype') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_templatebindingtype }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_templateid') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_templateid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_manufacturer') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_creator_type') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_creator_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_product_code_antigro') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_product_code_antigro }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_product_source') }}
                        </th>
                        <td>
                            {{ $product->poligrafia_product_source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.delete') }}
                        </th>
                        <td>
                            {{ $product->delete }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection