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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('messages/update/{id}', 'App\Http\Controllers\ContactsController@updateMessage'
)->name('contacts-update');

Route::get('messages/{id}', 'App\Http\Controllers\ContactsController@oneMessage'
)->name('contacts-data-one');

Route::get('messages', 'App\Http\Controllers\ContactsController@allData'
)->name('contacts-data');

Route::post('/contacts/submit', 'App\Http\Controllers\ContactsController@submit'
)->name('contacts-form');

Route::post('messages/update/{id}', 'App\Http\Controllers\ContactsController@update'
)->name('contacts-form-update');

Route::get('messages/delete/{id}', 'App\Http\Controllers\ContactsController@delete'
)->name('contacts-delete');