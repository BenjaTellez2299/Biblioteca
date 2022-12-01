<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarAutor extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtName'=>'required|min:4',
            'date'=>'required|date',
            'number'=>'required|max:4'
        ];
    }
}
