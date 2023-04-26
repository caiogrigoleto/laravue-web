<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Console\Input\Input;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/products', function () {
    $data = Product::all();
    return view('products')->withData($data);
});

Route::get('/groups', function () {
    return view('groups');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/customers', function () {
    return view('customers');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post ( '/editItem', function (Request $request) {
    
    $rules = array (
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|email',
            'gender' => 'required',
            'country' => 'required|regex:/^[\pL\s\-]+$/u',
            'salary' => 'required|regex:/^\d*(\.\d{2})?$/' 
    );
    $validator = Validator::make ( Input::all(), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Product::find ( $request->id );
        $data->first_name = ($request->fname);
        $data->last_name = ($request->lname);
        $data->email = ($request->email);
        $data->gender = ($request->gender);
        $data->country = ($request->country);
        $data->salary = ($request->salary);
        $data->save ();
        return response ()->json ( $data );
    }
} );