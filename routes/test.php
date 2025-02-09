<?php

use App\Http\Controllers\Test\HomeController;
use App\Http\Controllers\Test\LoginController;
use App\Http\Controllers\Test\RegisterController;
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

    Route::get('view', [TestController::class, 'view'])->name('tests.view');

    Route::get('directives', [TestController::class, 'directives'])->name('tests.directives');

    Route::get('each', [TestController::class, 'each'])->name('tests.each');

    Route::get('include', [TestController::class, 'include'])->name('tests.include');

    Route::resource('users', UserController::class);

    Route::resource('home', HomeController::class);

    // auth
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // car
    Route::get('cars', [TestController::class, 'index'])->name('cars.index');

});

// not found Page
Route::fallback(function () {

    return view('tests.notFoundPage');
});



