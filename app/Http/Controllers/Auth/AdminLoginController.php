<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests\AdminRequest;
use App\Admin;

class AdminLoginController extends Controller
{
   use AuthenticatesUsers;
   private function validator(Request $request)
   {
     //validation rules.
     $rules = [
       'username'    => 'required|min:5|max:40',
       'password' => 'required|string|min:4|max:255',
     ];
     //custom validation error messages.
     $messages = [
       'username.exists' => 'These credentials do not match our records.',
     ];
     //validate the request.
     $request->validate($rules,$messages);
   }

   private function loginFailed()
   {
     return redirect('loginadmin')->with('flash_message', 'Wrong Username or Password')
                                  ->with('alert-class', 'alert-danger');
   }

   protected function authenticated()
   {
       if (Auth::guard('admin')->check()) {
          return redirect('admin/dashboard');
       }
   }

   public function login()
   {
        return view('admin.login');
   }


   public function loginPost(Request $request)
   {
         $this->validator($request);
         if(Auth::guard('admin')->attempt($request->only('username','password'), false)){
             //Authentication passed...
             return $this->authenticated();
             // ->with('status','You are Logged in as Admin!');
         }
         //Authentication failed...
         return $this->loginFailed();
   }

   public function registerPost(AdminRequest $request)
   {
         $input = $request->all();
         $password = $request->password;
         $input['password'] = bcrypt($password);
         $admin = Admin::create($input);
         Session::flash('CRUD_Message', 'Berhasil Daftar .. ');
         return redirect('loginadmin');
   }

   public function logout()
   {
         Auth::guard('admin')->logout();
         return redirect('loginadmin')->with('flash_message','Admin has been logged out!')
                                     ->with('alert-class', 'alert-info');
         // the value of alert class is class in bootstrap 4
   }
}
