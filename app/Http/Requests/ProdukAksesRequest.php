<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukAksesRequest extends FormRequest
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
            'akun_akses' => 'required',
            'harga' => 'required|integer',
            'potongan_harga' => 'sometimes|integer',
            'waktu' => 'required|integer|max:12|min:1',
            'deskripsi' => 'required|string|min:10|max:255',
        ];
    }
}
