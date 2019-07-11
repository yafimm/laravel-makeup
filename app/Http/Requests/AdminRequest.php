<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
          $username = 'required|min:6|unique:admin';
          $id_tipe_admin = 'required';
          $email = 'sometimes|min:6|email|unique:admin';
          $alamat = '';
        }else{
          $username = 'sometimes';
          $id_tipe_admin = 'sometimes';
          $email = 'required|min:6|email|unique:admin,email,'.$this->get('username');
          $alamat = 'required|string';
          $no_telp = 'requrired|numeric|max:12|min:10';
        }
        return [
           'nama' => 'required|min:6|string',
           'id_tipe_admin' => $id_tipe_admin,
           'username' => 'required',
           'password' => 'required',
           'email' => $email,
           'alamat' => $alamat;
           'no_telp' => $no_telp;
        ];
    }
}
