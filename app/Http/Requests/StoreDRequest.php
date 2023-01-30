<?php

namespace App\Http\Requests;

use App\Models\D;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('d_create');
    }

    public function rules()
    {
        return [];
    }
}
