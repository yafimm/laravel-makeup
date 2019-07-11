<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        if($this->method() == 'POST'){
            $judul = 'required|string|min:5|max:100|unique:blog';
            $thumbnail = 'required|image|max:2048|mimes:jpeg,jpg,bmp,png';
        }else{
            $judul = 'required|string|min:5|max:100|unique:blog,judul,'.$this->get('id');
            $thumbnail = 'sometimes|image|max:2048|mimes:jpeg,jpg,bmp,png';
        }

        return [
            'judul' => $judul,
            'thumbnail' => $thumbnail,
            'isi_blog' => 'required|string|min:5',
        ];
    }
}
