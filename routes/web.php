<?php

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
    return view('welcome');

    
});

Route::group(['middleware' => 'guest'], function(){

    //register
    Route::livewire('/register', 'auth.register')
    ->layout('layouts.app')->name('auth.register');

    //login
    Route::livewire('/login', 'auth.login')
    ->layout('layouts.app')->name('auth.login');

});

Route::group(['middleware' => 'auth'], function(){

    //dashboard
    Route::livewire('/admin/dashboard', 'admin.dashboard')
    ->layout('layouts.app')->name('admin.dashboard');

});


