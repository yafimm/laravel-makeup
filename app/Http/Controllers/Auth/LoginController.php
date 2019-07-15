<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\User;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    private function validator(Request $request)
    {
      //validation rules.
      $rules = [
        'username'    => 'required|min:5|max:40',
        'password' => 'required|string|min:4|max:255',
      ];

      $messages = [];
      //validate the request.
      $request->validate($rules,$messages);
    }

    private function loginFailed()
    {
      return redirect('login')->with('flash_message', 'Wrong Username or Password')
                              ->with('alert-class', 'alert-danger');
    }

    protected function authenticated()
    {
        if (Auth::guard('user')->check()){
              return redirect('');
        }
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
  		  return view('user.register');
  	}

    public function loginPost(Request $request)
    {
        $this->validator($request);
        // dd($request);
        if(Auth::guard('user')->attempt($request->only('username','password'), false)){
            //Authentication passed...
            return $this->authenticated();
        }
        //Authentication failed...
        return $this->loginFailed();
    }

  	public function registerPost(UserRequest $request)
    {
    		$input = $request->all();
    		$password = $request->password;
    		$input['password'] = bcrypt($password);
    		$user = User::create($input);
        $user->akses->attach(1,  [
                                  'status' => 'Aktif',
                                  'waktu_berakhir' => '2099-11-11',
                                  'waktu_mulai' => date('Y-m-d'),
                                ]);
        return redirect('login')->with('flash_message', 'Selamat anda telah berhasil mendaftar akun anda. silahkan login untuk melanjutkan.. ')
                                 ->with('alert-class', 'alert-success');
  	}

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('login')->with('flash_message','Your account have been logged out!')
                                ->with('alert-class', 'alert-info');
          // the value of alert class is class in bootstrap 4
    }

}
