<?php

use App\Http\Controllers\Reads;
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
//Route::method('uri', [controller_name::class,'function_name'])->name('anyname');
Route::get('/read-db',[Reads::class,'read']);
