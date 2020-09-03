<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegisterUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegisterUsers, ThrottlesLogins;
	
	protected $redirectTo = 'login';
	protected $username = 'username';
	
//	public function __construct()
//	{
//		$this->middleware('guest', ['except' => 'logout])
//	}
	
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'Name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:user'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'Password' => ['required', 'string', 'min:6', 'confirmed'],
		]);
	}

		
	protected function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
		]);
		
	}			
			
}
