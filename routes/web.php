<?php

use Illuminate\Support\Facades\Route;


require_once __DIR__ . '/test.php';


// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'tests/users');
