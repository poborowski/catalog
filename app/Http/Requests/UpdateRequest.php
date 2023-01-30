<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\;
use Gate;
use Illuminate\Http\Response;

class UpdateRequest extends FormRequest  {





public function authorize()
{
    



return Gate::allows('_edit');
    
}
public function rules()
{
    



return [];
    
}

}