<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AksesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nama' => 'required|string|min:4|max:50|unique:akses',
          'nilai_akses' => 'required|integer',
          'harga' => 'required|integer',
          'deskripsi' => 'required|string|min:5|max:255',
        ];
    }
}
