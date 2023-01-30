@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.addShop.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.add-shops.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.addShop.fields.id') }}
                        </th>
                        <td>
                            {{ $addShop->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addShop.fields.email') }}
                        </th>
                        <td>
                            {{ $addShop->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addShop.fields.password') }}
                        </th>
                        <td>
                            ********
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.add-shops.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection