<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($request->hasFile('pic')) {
            $formFields['pic'] = $request->file('pic')->store('profilePics', 'public');
        }

        $formFields['fname'] = $formFields['firstname'];
        $formFields['lname'] = $formFields['lastname'];
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);


        return redirect('/')->with('message', "Account Created Successfully");
    }

    public function login()
    {
        return View('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Logged In Successfully');
        }

        return back()->withErrors(['email' => 'Inavalid Credentials'])->onlyInput('email');
    }


    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerate();

        return redirect('/')->with(['message' => 'Logged out Successfully']);
    }
}
