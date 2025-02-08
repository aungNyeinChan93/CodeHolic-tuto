<?php

use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Test\UserController;
use App\Models\User;
use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;


Route::group(['controller' => TestController::class, 'prefix' => 'tests'], function () {

    Route::get('mail', 'mail')->name('tests.mail');
    Route::get('noti', 'noti')->name('tests.noti');

    Route::get('{lang?}/{something}/{id?}', 'parameter')
        ->whereIn('lang', ['en', 'mm'])
        ->whereNumber('id')
        ->whereAlpha('something')
        ->name('tests.parameter');

    Route::get('to-route', 'to_route');

    Route::resource('users', UserController::class);

});

// not found Page
Route::fallback(function () {

    return view('tests.notFoundPage');
});



