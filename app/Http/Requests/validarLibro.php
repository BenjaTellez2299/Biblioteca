<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtISBN'=>'required|min:13',
            'txtTitu'=>'required|max:50',
            'txtPag'=>'required|integer',
            'txtEdit'=>'required|max:50',
            'txtEmail'=>'required|email:rfc,dns'
        ];
    }
}
