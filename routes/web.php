<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////// main ///////
Route::get('/', function () {

    return view('index');
});
////////////////////////////////////////////////////
////////////////// ADMIN //////////////////////////
/////////////////////////////////////////////////
Route::group(['namespace' => 'Admin' , 'prefix' => 'panel' , 'middleware' => 'admin'] , function (){
    $this->get('/' , function (){
        $users = \App\User::latest()->paginate(20);
        return view('admin.index' , compact('users'));
    });
    $this->get('/pdf' , function (){
        $users = \App\User::latest()->get();
        $pdf = PDF::loadView('admin.all', compact('users'));
        return $pdf->download('users.pdf');
    });
    $this->get('/all' , function (){
        $users = \App\User::latest()->get();
        return view('admin.all' , compact('users'));
    });

    $this->get('/downloadInsurance' , function (){
        $insurances = \App\Insurance::latest()->get();
        return view('admin.insurances.insurances' , compact('insurances'));
    });

    $this->resource('users' , 'UserController');
    $this->resource('insurances' , 'insuranceController');
});
/////////////// INDEX /////////
Route::get('/addInsurance' , 'InsuranceController@index');
Route::patch('/addInsurance' , 'InsuranceController@update');


////// Payment //////
Route::post('/insurance/payment' , 'InsuranceController@payment');
Route::get('/insurance/payment/checker' , 'InsuranceController@checker');
/////

///// auth ///////
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
