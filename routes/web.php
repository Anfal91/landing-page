<?php

use Illuminate\Support\Facades\Route;
use App\Models\User_data;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/success', function(){
    return view('sucess');
});
Route::get('/birla-advaya', function () {
    return view('birla');
});
Route::get('/brigade-eldorado', function () {
    return view('eldorado');
});
Route::post('/submit', function () {
    User_data::create([
        'name' => request('name'),
        'email' => request('email'),
        'mobile' => request('mobile'),
        'type' => request('type')
    ]);
    return redirect('/success');
});