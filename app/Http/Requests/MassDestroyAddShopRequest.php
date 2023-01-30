<?php

namespace App\Http\Requests;

use App\Models\AddShop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAddShopRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('add_shop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:add_shops,id',
        ];
    }
}
