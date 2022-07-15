<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\platform;

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

Route::get('/',[platform::class, 'platform_title']);
Route::get('/about-us',[platform::class, 'about_title']);
Route::get('/faq',[platform::class, 'faq_title']);
Route::get('/review',[platform::class, 'review_title']);
Route::get('/contact',[platform::class, 'contact_title']);
Route::get('/terms-and-conditions',[platform::class, 'terms_title']);
Route::get('/privacy-policy',[platform::class, 'privacy_title']);
Route::get('/book-a-room',[platform::class, 'book_title']);


// Route::view('/faq','faq');

// Route::get('/', function () 
// {
//     // return view('layouts/header');
//     return view('platform');
    
// });


