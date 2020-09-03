<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $username = 'Username';
    protected $email = 'Email';
    protected $reportto = 'ReportTo';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Determine if the request field is email or username.
     * 
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function field(Request $request)
    {
        $email = $this->username();
        return filter_var($request->get($email), FILTER_VALIDATE_EMAIL) ? $email : 'username';
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $field = $this->field($request);

        $message = [
            "{$this->username()}.exists" => 'Username atau password yang anda masukan salah'
        ];

        $request->validate([
            $this->username() => "required|string|exists:users,{$field}",
            'password' => 'required|string',
        ], $message);
    }

    /**
     * 
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $field = $this->field($request);
        $login = $request->get($this->username());
        $user  = DB::table('users')->where('username', $login)->get();
        // echo $user; die();
        if($user->count())
        {
            // print_r($user[0]->ReportTo);
            // echo $request->input('email');
            // Email adalah username
            // die();
            if($user[0]->username == $request->input('email'))
            {
  
              Session::put('UserID',$user[0]->id);
              Session::put('Username',$user[0]->name);
            //   Session::put('password',$user[0]->password);
              Session::put('Email',$user[0]->email);
              Session::put('ReportTo',$user[0]->ReportTo);
              Session::put('GroupID',$user[0]->GroupID);
              Session::put('Login',$user[0]->Login);
              Session::put('UnitID',$user[0]->UnitID);
              Session::put('PositionID',$user[0]->PositionID);
              Session::put('Hp',$user[0]->Hp);
              Session::put('File',$user[0]->File);
              Session::put('Signature',$user[0]->Signature);
              Session::put('Active',$user[0]->Active);
              Session::put('ReportTo',$user[0]->ReportTo);
              Session::put('Deleted',$user[0]->Deleted);
              
              return [
                $field => $request->get($this->username()),
                'password' => $request->get('password')
                ];
            }
            else {
              echo 'gagal'; die();
            }
        }
        else {
          echo 'gagal1'; die();
        }
    }

}
