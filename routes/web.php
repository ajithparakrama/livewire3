<?php
 
// use livewire;
use Illuminate\Support\Facades\Route;
/*

|--------------------------------------------------------------------------
| Web Routes``
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
// Route::livewire('/register','register');
Route::get('/', function(){
    return ['success!'];
});
 
Route::get('register', function () { 
    return view('register');
});