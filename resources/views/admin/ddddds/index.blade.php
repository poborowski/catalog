@extends('layouts.admin')
@section('content')
@can('ddddd_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.ddddds.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.ddddd.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.ddddd.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Ddddd">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.preview_featured_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.api') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_id_wordpress') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.sku') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.ean') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.is_personalized') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.show_free_sample_btn') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_availability') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.realization_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.attributes_from_poligrafia_api') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.change_price_when') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.attach_additional_product') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.disable_from_delivery') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_rating') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.owner') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_long') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_short') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_desc_dane') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.images_urls') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.dimension') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.unit') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.tags') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_style') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_color_dominant') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_products_decoration') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.filters_product_format') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.meta_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.meta_desc') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.photo_url_feed') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.disable_from_feed') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.categories') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_variant_family') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.product_collection') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.link_to_org_product') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_templatebindingtype') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_templateid') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_manufacturer') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_creator_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_product_code_antigro') }}
                        </th>
                        <th>
                            {{ trans('cruds.ddddd.fields.poligrafia_product_source') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ddddds as $key => $ddddd)
                        <tr data-entry-id="{{ $ddddd->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $ddddd->id ?? '' }}
                            </td>
                            <td>
                                @if($ddddd->preview_featured_image)
                                    <a href="{{ $ddddd->preview_featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $ddddd->preview_featured_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $ddddd->api ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_id_wordpress ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_slug ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->status ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->sku ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->ean ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $ddddd->is_personalized ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $ddddd->is_personalized ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $ddddd->show_free_sample_btn ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $ddddd->show_free_sample_btn ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $ddddd->product_availability ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->currency ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->realization_time ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->price ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->attributes_from_poligrafia_api ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->change_price_when ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->attach_additional_product ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->disable_from_delivery ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_rating ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->owner ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_name ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_desc_long ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_desc_short ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_desc_dane ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->images_urls ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->dimension ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->unit ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->tags ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_product_style ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_product_type ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_color_dominant ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_products_decoration ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_product_photo ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->filters_product_format ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->meta_title ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->meta_desc ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->photo_url_feed ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->disable_from_feed ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->categories ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_variant_family ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->product_collection ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->link_to_org_product ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_templatebindingtype ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_templateid ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_manufacturer ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_creator_type ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_product_code_antigro ?? '' }}
                            </td>
                            <td>
                                {{ $ddddd->poligrafia_product_source ?? '' }}
                            </td>
                            <td>
                                @can('ddddd_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.ddddds.show', $ddddd->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('ddddd_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.ddddds.edit', $ddddd->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('ddddd_delete')
                                    <form action="{{ route('admin.ddddds.destroy', $ddddd->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('ddddd_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.ddddds.massDestroy') }}",
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
  let table = $('.datatable-Ddddd:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection