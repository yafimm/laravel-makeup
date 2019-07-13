<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Storage;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('user')->except('index_user');
    }

    private function validator(Request $request)
    {
        //validation rules.

        $rules = [
          'nama' => 'required|string|min:6|max:50',
          'alamat' => 'sometimes|string|min:5',
          'facebook' => 'sometimes|string|min:6|max:50',
          'twitter' => 'sometimes|string|min:6|max:50',
          'linkedin' => 'sometimes|string|min:6|max:50',
          'instagram' => 'sometimes|string|min:6|max:50',
          'foto' => 'sometimes|image|max:1024|mimes:jpeg,jpg,bmp,png',
          'no_telp' => 'sometimes|regex:/(08)[0-9]/'
        ];

        $messages = [''];

        //validate the request.
        $this->validate($request ,$rules);
    }

    private function uploadGambar(Request $request)
    {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        $username = \Auth::guard('user')->user()->username;
        if($request->file('foto')->isValid()){
            $filename = date('Ymd').".$username.$ext";
            $upload_path = 'images/profile';
            $request->file('foto')->move($upload_path, $filename);
            return $filename;
        }
        return false;
    }

    private function hapusGambar(User $user)
    {
        $exist = Storage::disk('fotoprofil')->exists($user->foto);
        if(isset($user->foto) && $exist){
            $delete = Storage::disk('fotoprofil')->delete($user->foto);
            return $delete; //Kalo delete gagal, bakal return false, kalo berhasil bakal return true
        }
    }

    public function index()
    {
        $all_user = User::all();
        return view('user.index', compact('all_user'));
    }

    public function index_user($username)
    {
        $user = User::find($username);
        if($user)
        {
            return view('profile.index-user', compact('user'));
        }
        else
        {
            return abort(404);
        }
    }

    public function edit_profile()
    {
        $user = \Auth::guard('user')->user();
        return view('profile.edit-profile-user', compact('user'));
    }

    public function edit_password()
    {
        $user = \Auth::guard('user')->user();
        return view('profile.edit-password-user', compact('user'));
    }

    public function show(User $user)
    {
          return view('user.show', compact('user'));
    }

    public function update_profile(Request $request)
    {
          $this->validator($request);
          $user = User::find(\Auth::guard('user')->user()->username);
          $input = $request->all();
          if(isset($input['foto']))
          {
              $this->hapusGambar($user);
              $input['foto'] = $this->uploadGambar($request);
          }

          $update = $user->update($input);

          if($update)
          {
              return redirect('/'.$user->username)->with('flash_message', 'Data Akun berhasil diubah')
                                     ->with('alert-class', 'alert-success');
          }
          // kalo gagal dilempar kesini
          return redirect('/'.$user->username)->with('flash_message', 'Data Akun gagal diubah')
                                    ->with('alert-class', 'alert-danger');
    }

    public function update_password(Request $request)
    {
          $validator = \Validator::make($request->all(), [
              'password' => 'required',
              'new_password'=>'required|confirmed|min:6|max:32',
              'new_password_confirmation'=>'sometimes|required_with:new_password',
          ]);

          if ($validator->fails()) {
              return redirect()->route('password.edit')
                              ->withErrors($validator)
                              ->with('flash_message', 'Ada kesalahan pada saat memasukkan data password');
          }else{
              $user = User::find(\Auth::guard('user')->user()->username);
              if(Hash::check($request->password, $user->password)){
                  $user->update(['password' => bcrypt($request->new_password)]);
                  return redirect('/'.$user->username)->with('flash_message', 'Password Akun berhasil diubah')
                                                      ->with('alert-class', 'alert-success');
              }
          }
    }

}
