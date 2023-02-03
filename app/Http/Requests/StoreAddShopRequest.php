<?php

namespace App\Http\Requests;

use App\Models\AddShop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAddShopRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('add_shop_create');
    }

    public function rules()
    {
        return [
            'f' => [
                'string',
                'nullable',
            ],
        ];
    }
}
