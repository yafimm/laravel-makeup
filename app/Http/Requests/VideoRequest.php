<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'POST'){
            $video = 'required|mimes:mp4,mov,ogg,qt';
            $judul = 'required|string|min:5|max:255|unique:video';
        }else{
            $video = 'sometimes|mimes:mp4,mov,ogg,qt';
            $judul = 'required|string|min:5|max:255|unique:video, judul,'.$this->get('judul').;
        }

        return [
          'video'   => $video,
          'judul' => $judul,
          'deskripsi' => 'required|string|min:10',
          'thumbnail' => 'sometimes|mimes:jpg,png,svg',
          'hak_akses' => 'required'
        ];
    }
}
