<?php

namespace App\Http\Controllers\Test;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //index
    public function index()
    {
        $users = User::query()->simplePaginate(5);
        return view('tests.User.profile.index', compact('users'));
    }

    // show
    public function show(User $user)
    {
        return $user;
    }

    //create
    public function create()
    {
        return view('tests.User.profile.create');
    }

    // store
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        unset($fields['password_confirmation']);
        User::create($fields);

        return to_route('users.index')->with('success', 'user create success!');
    }

    // edit
    public function edit(User $user)
    {
        return view('tests.User.profile.edit', compact('user'));
    }

    // update
    public function update(User $user, Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Hash::check($fields['password'], $user->password)) {
            $user->update($fields);
        }

        return to_route('users.index')->with('success', 'user update success');
    }

    // destroy

}
