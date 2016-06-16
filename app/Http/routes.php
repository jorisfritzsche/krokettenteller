<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Counter;

Route::get('/', function () {
    return view('home', ['counters' => Counter::all()]);
});

Route::post('add/{type}', function ($type) {
    $counter = Counter::firstOrCreate(['type' => $type]);
    $counter->count++;
    $counter->save();

    return redirect('/');
});
