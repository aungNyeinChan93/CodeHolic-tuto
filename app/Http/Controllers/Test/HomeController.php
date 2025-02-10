<?php

namespace App\Http\Controllers\Test;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //index
    public function index()
    {

        return view('tests.User.home.index', [
            'users' => User::get()->toArray(),
        ]);
    }
}
