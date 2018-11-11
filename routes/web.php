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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('login',['uses'=>'Auth\LoginController@login','as'=>'login.custom']);
Route::get('/Useraccessright', 'PermissionController@Useraccessright')->name('Useraccessright');
Route::get('/addpermission', 'PermissionController@addpermission')->name('addpermission');
Route::get('/Branchprofile', 'BranchSettingController@Branchprofile')->name('Branchprofile');


//Route connect in SalesControler
Route::get('/sale', 'SalesController@sale')->name('sale');
Route::get('/item', 'SalesController@items')->name('item');
Route::get('/additem','SalesController@additem')->name('additem');
Route::get('/addsale','SalesController@addsale')->name('addsale');

//Route Customer in CustomerControler

Route::get('/customer', 'CustomerController@customer')->name('customer');
Route::get('/addcustomer', 'CustomerController@addcustomer')->name('addcustomer');