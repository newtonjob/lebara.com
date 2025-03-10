<?php

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'coming-soon');

Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/products', 'products');

Route::view('/old', 'welcome');

Route::post('/join', function (Request $request) {
    Subscriber::updateOrcreate($request->validate(['email' => 'required|email']));

    return response()->noContent();
});
