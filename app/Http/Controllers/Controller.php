<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
//use App\Http\Controllers\DB;

class Controller extends BaseController
{
    //

	public function postRegister(Request $request){
		// User::create([
		// 	'firstname' => $request->input('firstname') ,
		// 	'lastname' => $request->input('lastname') , 
		// 	'email' => $request->input('email') ,
		// 	'address' => $request->input('address') ,
		// 	'handphone' => $request->input('handphone') ,
		// 	'password' => $request->input('password') 
		// ]);


		if(strlen($request->input('firstname')) <= 0 ||  
			strlen($request->input('lastname')) <= 0 ||  
			strlen($request->input('email')) <= 0 ||  
			strlen($request->input('address'))  <= 0 || 
			strlen($request->input('handphone')) <= 0 ||  
			strlen($request->input('password')) <= 0 ||
			$request->input('repassword') != $request->input('password')  )

		return view('register',
			[
				'error' => 'fill everything please and re enter password'
			]);


		app('db')->insert('INSERT INTO user(firstname,lastname,email,address,handphone,password) values(?,?,?,?,?,?)',
			[$request->input('firstname'),
			$request->input('lastname'),
			$request->input('email'),
			$request->input('address'),
			$request->input('handphone'),
			$request->input('password')]);

		return view('login',
			[
				'firstname' => $request->input('firstname')
			]);

	}

	public function postLogin(Request $request){
		// User::create([
		// 	'firstname' => $request->input('firstname') ,
		// 	'lastname' => $request->input('lastname') , 
		// 	'email' => $request->input('email') ,
		// 	'address' => $request->input('address') ,
		// 	'handphone' => $request->input('handphone') ,
		// 	'password' => $request->input('password') 
		// ]);


		// $login = app('db')->select('SELECT * FROM user WHERE email=? AND password=?',
		// 	[$request->input('email'),
		// 	$request->input('password')]);

		$login = app('db')->table('user')->where('email', $request->input('email'))->where('email', $request->input('password'))->first();


		if($login != null){

			// $request->session()->put('login',$login);
			// return redirect('home')->with();
			return view('home',
				[
					'name' => $login->firstname
				]);
		}else{
			return  view('login',[
					'error' => 'Wrong combination!'
				]);
		}

	}

}
