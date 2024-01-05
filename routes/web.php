<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmploymentController;
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
Route::get('/app', function () {
    return view('app');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::prefix('contact')->group(function () {
    Route::get('',[ContactController::class,'index'])->name('contact.index');
    Route::get('/save',[ContactController::class,'add'])->name('contact.add');

});


Route::prefix('employment')->group(function () {
    Route::get('',[EmploymentController::class,'index'])->name('employment.index');
    Route::get('/save',[EmploymentController::class,'add'])->name('employment.add');

});

Route::get('/our-vision', function () {
    return view('our-vision');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/job-opening', function () {
    return view('job-opening');
});
Route::get('/commercial-terms', function () {
    return view('commercial-terms');
});