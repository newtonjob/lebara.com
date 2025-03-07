<?php

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'coming-soon');

Route::post('/join', function (Request $request) {
    Subscriber::create($request->validate(['email' => 'required|email']));

    return response()->noContent();
});
