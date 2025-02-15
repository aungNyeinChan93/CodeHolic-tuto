<?php

namespace App\Http\Controllers\Test;

use App\Models\Role;
use App\Models\User;
use App\Jobs\TestJob;
use Illuminate\Http\Request;
use App\View\Components\Example;
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

    // add_admin
    public function add_admin(User $user)
    {
        // $adminRole = Role::where('id', 2)->first();
        // $adminRole->users()->attach($user);
        // return 'add admin success!';

        $user->roles()->sync([2]);
        return back();
    }

    // app_layout
    public function app_layout()
    {
        return view('tests.alltest.app_layout');
    }

    // guest_layout
    public function guest_layout()
    {
        return view('tests.alltest.guest_layout');
    }
}
