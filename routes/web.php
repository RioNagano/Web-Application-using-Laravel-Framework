<?php

use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detailItem/{id}', 'HomeController@detailItem'); //route untuk detail item
Route::post('/search', 'HomeController@searchItem')->name('search'); //route untuk search
Route::get('/register', 'RegisterController@makeRegisterForm')->name('register'); //route untuk register
Route::post('/register', 'RegisterController@register')->name('register'); //route untuk post request register
Route::get('/login', 'LoginController@makeLoginForm')->name('login'); //route untuk login
Route::post('/login', 'LoginController@login')->name('login'); //route post request login 
Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth'); //route untuk logout
Route::get('/viewTransaction', 'HomeController@viewTransaction')->name('viewTr')->middleware('auth'); //route untuk menampilkan transaction


//Member Route
Route::get('/viewCart', 'HomeController@viewCart')->name('viewCart')->middleware('auth', 'member'); //route untuk viewcart
Route::get('/addCart/{id}', 'CartController@detailShoe')->middleware('auth', 'member'); //route untuk add item ke cart
Route::post('/addCart', 'HomeController@addCart')->name('addCart')->middleware('auth','member'); //route untuk menampilkan add cart view
Route::get('/editCart/{id}', 'HomeController@editCart')->middleware('auth', 'member'); //route untuk edit item di cart
Route::post('/updateCart/{id}', 'HomeController@updateCart')->middleware('auth', 'member'); //route update cart di item
Route::get('/delCart/{id}', 'HomeController@delCart')->middleware('auth', 'member'); //route untuk delete item di cart
Route::get('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth', 'member'); //route untuk checkout item pada cart



//Admin Route
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth', 'admin'); 
Route::get('/addShoe', 'AdminController@addItem')->name('addShoe')->middleware('auth', 'admin'); //route untuk menambah item
Route::post('/addShoe', 'AdminController@storeItem')->name('storeShoe')->middleware('auth', 'admin'); //route untuk post request menambah item 
Route::get('/updateShoe/{id}', 'AdminController@editItem')->middleware('auth', 'admin'); //route untuk update shoe
Route::post('/updateShoe/{id}', 'AdminController@updateItem')->middleware('auth', 'admin'); //route untuk post request update shoe