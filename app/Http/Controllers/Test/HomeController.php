<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('tests.User.home.index');
    }
}
