<?php

namespace App\Http\Requests;

use App\Models\D;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('d_edit');
    }

    public function rules()
    {
        return [];
    }
}
