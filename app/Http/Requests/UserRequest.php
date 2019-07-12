<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     // Override redirect buat login yang dari halaman home
     protected $redirect = 'register';

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
         'username' => 'required|min:6|max:30|unique:user|string',
         'nama' => 'sometimes|string|max:255',
         'email' => 'required|string|email|max:255|unique:user',
         'alamat' => 'sometimes|string',
         'password' => 'required|string|min:6|confirmed',
         'password_confirmation' => 'sometimes|required_with:password',
         'foto' => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
         'no_telp' => 'sometimes|regex:/(01)[0-9]{9}/'
       ];
    }
}
