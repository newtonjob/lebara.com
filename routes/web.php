<?php

use App\Http\Middleware\PreventSpam;
use App\Models\Subscriber;
use App\Notifications\SubscriberCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'coming-soon');

Route::view('/home', 'home');
Route::view('/news', 'news');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/careers', 'careers');
Route::view('/products', 'products');

Route::view('/old', 'welcome');

Route::post('/join', function (Request $request) {
    $subscriber = Subscriber::firstOrCreate($request->validate(['email' => 'required|email']));

    defer(fn () => $subscriber->notify(new SubscriberCreated));

    return response()->noContent();
})->middleware(PreventSpam::class);

Route::get('/mail', fn () => (new \App\Notifications\Newsletter)->toMail(Subscriber::first()));
