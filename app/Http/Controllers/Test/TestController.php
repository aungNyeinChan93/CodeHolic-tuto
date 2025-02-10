<?php

namespace App\Http\Controllers\Test;

use App\Models\User;
use App\Jobs\TestJob;
use App\View\Components\Example;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    /**
     * Summary of noti
     * @return string
     */
    public function noti()
    {
        $user = User::first();
        TestJob::dispatch($user);
        return 'success noti!';
    }

    /**
     * Summary of mail
     * @return string
     */
    public function mail()
    {
        $users = User::first();
        TestJob::dispatch($users);
        return 'job success';
    }

    /**
     * Summary of parameter
     * @param string $lang
     * @param string $something
     * @param mixed $id
     * @return never
     */
    public function parameter(string $lang = 'en', string $something, $id = null)
    {
        dd(route('tests.parameter', ['en', 'test', 12]));

        // dd(url('/tests/mail'));
        // return "language is $lang and id is $id || $something";
    }

    /**
     * Summary of to_route
     * @return \Illuminate\Http\RedirectResponse
     */
    public function to_route()
    {
        return to_route('tests.parameter', ['mm', 'toRoute', 7]);
    }

    public function view()
    {
        if (!View::exists('something')) {
            dump('hit');
        }
        return View::first([
            'something',
            'tests.alltest.view'
        ])
            ->with('route', route('tests.view'))
            ->with('appName', config('app.name'));
    }

    // directives

    public function directives()
    {
        return view('tests.alltest.directives', [
            'name' => 'Directives',
            'users' => User::all(),
        ]);
    }

    // each
    public function each()
    {
        return view('tests.alltest.each', [
            'users' => User::all(),
        ]);
    }

    // include
    public function include()
    {
        return view('tests.alltest.include');
    }

    public function index()
    {
        $users = User::all();
        return view('tests.alltest.Cars.index', [
            'users' => $users,
        ]);
    }

    // finexo
    public function finexo()
    {
        return view('tests.alltest.Finexo.index');

    }

    // login
    public function login()
    {
        return view('tests.alltest.cars.login');
    }

    // register
    public function register()
    {
        return view('tests.alltest.cars.register');
    }

    // component
    public function component()
    {
        // $user = User::first();
        // $test = new Example($user);

    }

    // usersLists
    public function usersLists()
    {
        return view('tests.alltest.users');
    }
}
