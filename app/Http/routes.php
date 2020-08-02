<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $app->group(['middleware' => ['web']], function ($app) {
//     // your routes here
// 	$app->get('/', function () use ($app) {

// 		return view('register');
// 	//    return $app->version();
// 	});
// });

$app->get('/', function () use ($app) {

		return view('register');
	//    return $app->version();
});

$app->get('/login', function () use ($app) {

//	User::create();

	return view('login');



//    return $app->version();
});

$app->get('/coupon', function () use ($app) {

//	User::create();

	return view('coupon');



//    return $app->version();
});


$app->get('coupon/{id}', function ($id) {
    return view('detailCoupon',[
    	'id' => $id
    	]);
});


$app->get('invalidate/{id}', function ($id) {

	app('db')->table('coupon')->where('id',$id)->update(['valid'=>0]);

    return view('coupon');
});

$app->get('/register', function () use ($app) {

//	User::create();

	return view('register');



//    return $app->version();
});


$app->get('/home', function () use ($app) {

//	User::create();

	return view('home');



//    return $app->version();
});

$app->post('/register','Controller@postRegister');
$app->post('/login','Controller@postLogin');


// $app->get('/login', function () use ($app) {
// 	return view('login');
// //    return $app->version();
// });
