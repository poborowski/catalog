<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\;
use Gate;
use Illuminate\Http\Response;

class StoreRequest extends FormRequest  {





public function authorize()
{
    



return Gate::allows('_create');
    
}
public function rules()
{
    



return [];
    
}

}