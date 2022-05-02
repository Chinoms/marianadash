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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('create-profile', 'App\Http\Controllers\User\EexiController@createProfile')->middleware('auth');
Route::post('save-profile', 'App\Http\Controllers\User\EexiController@saveProfile')->middleware('auth')->name('saveprofile');
Route::get('list-profiles', 'App\Http\Controllers\User\EexiController@listProfiles')->middleware('auth');
Route::get('view-profile/{id}', 'App\Http\Controllers\User\EexiController@viewProfile')->middleware('auth');

require __DIR__.'/auth.php';
