@extends('layouts.admin')
@section('content')
@can('product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.products.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.product.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Product', 'route' => 'admin.products.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.product.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.actual_product_url') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.preview_featured_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.contact_filters_products_decoration') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.featured_img') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.api') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_id_wordpress') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.sku') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.ean') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.is_personalized') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.show_free_sample_btn') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_availability') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.realization_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.attributes_from_poligrafia_api') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.change_price_when') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.attach_additional_product') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.disable_from_delivery') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_rating') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.owner') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_long') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_short') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_desc_dane') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.images_urls') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.dimension') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.unit') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.tags') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_style') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_color_dominant') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_products_decoration') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.filters_product_format') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.meta_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.meta_desc') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.photo_url_feed') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.disable_from_feed') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.categories') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_variant_family') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.product_collection') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.link_to_org_product') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_templatebindingtype') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_templateid') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_manufacturer') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_creator_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_product_code_antigro') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.poligrafia_product_source') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.delete') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                {{ $product->actual_product_url ?? '' }}
                            </td>
                            <td>
                                {{ $product->preview_featured_image ?? '' }}
                            </td>
                            <td>
                                {{ $product->contact_filters_products_decoration ?? '' }}
                            </td>
                            <td>
                                {{ $product->featured_img ?? '' }}
                            </td>
                            <td>
                                {{ $product->api ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_id_wordpress ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_slug ?? '' }}
                            </td>
                            <td>
                                {{ $product->status ?? '' }}
                            </td>
                            <td>
                                {{ $product->sku ?? '' }}
                            </td>
                            <td>
                                {{ $product->ean ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $product->is_personalized ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $product->is_personalized ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $product->show_free_sample_btn ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $product->show_free_sample_btn ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $product->product_availability ?? '' }}
                            </td>
                            <td>
                                {{ $product->currency ?? '' }}
                            </td>
                            <td>
                                {{ $product->realization_time ?? '' }}
                            </td>
                            <td>
                                {{ $product->price ?? '' }}
                            </td>
                            <td>
                                {{ $product->attributes_from_poligrafia_api ?? '' }}
                            </td>
                            <td>
                                {{ $product->change_price_when ?? '' }}
                            </td>
                            <td>
                                {{ $product->attach_additional_product ?? '' }}
                            </td>
                            <td>
                                {{ $product->disable_from_delivery ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_rating ?? '' }}
                            </td>
                            <td>
                                {{ $product->owner ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_name ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_desc_long ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_desc_short ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_desc_dane ?? '' }}
                            </td>
                            <td>
                                {{ $product->images_urls ?? '' }}
                            </td>
                            <td>
                                {{ $product->dimension ?? '' }}
                            </td>
                            <td>
                                {{ $product->unit ?? '' }}
                            </td>
                            <td>
                                {{ $product->tags ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_product_style ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_product_type ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_color_dominant ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_products_decoration ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_product_photo ?? '' }}
                            </td>
                            <td>
                                {{ $product->filters_product_format ?? '' }}
                            </td>
                            <td>
                                {{ $product->meta_title ?? '' }}
                            </td>
                            <td>
                                {{ $product->meta_desc ?? '' }}
                            </td>
                            <td>
                                {{ $product->photo_url_feed ?? '' }}
                            </td>
                            <td>
                                {{ $product->disable_from_feed ?? '' }}
                            </td>
                            <td>
                                {{ $product->categories ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_variant_family ?? '' }}
                            </td>
                            <td>
                                {{ $product->product_collection ?? '' }}
                            </td>
                            <td>
                                {{ $product->link_to_org_product ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_templatebindingtype ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_templateid ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_manufacturer ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_creator_type ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_product_code_antigro ?? '' }}
                            </td>
                            <td>
                                {{ $product->poligrafia_product_source ?? '' }}
                            </td>
                            <td>
                                {{ $product->delete ?? '' }}
                            </td>
                            <td>
                                @can('product_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('product_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $product->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('product_delete')
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('product_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.products.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Product:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection