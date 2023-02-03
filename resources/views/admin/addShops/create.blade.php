@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.addShop.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.add-shops.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">{{ trans('cruds.addShop.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addShop.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.addShop.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addShop.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="f">{{ trans('cruds.addShop.fields.f') }}</label>
                <input class="form-control {{ $errors->has('f') ? 'is-invalid' : '' }}" type="text" name="f" id="f" value="{{ old('f', '') }}">
                @if($errors->has('f'))
                    <div class="invalid-feedback">
                        {{ $errors->first('f') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addShop.fields.f_helper') }}</span>
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