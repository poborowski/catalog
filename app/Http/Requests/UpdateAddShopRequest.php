<?php

namespace App\Http\Requests;

use App\Models\AddShop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddShopRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('add_shop_edit');
    }

    public function rules()
    {
        return [
            'sd' => [
                'string',
                'nullable',
            ],
        ];
    }
}
