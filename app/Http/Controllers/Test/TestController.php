<?php

namespace App\Http\Controllers\Test;

use App\Jobs\TestJob;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
