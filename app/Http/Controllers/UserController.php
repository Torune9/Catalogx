<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        try {

            User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => $request->password
            ]);

            return redirect()
                ->route('users.login')
                ->with('success-info', 'Berhasil register');
        } catch (QueryException $err) {

            return redirect()
                ->route('users.register')
                ->with('failed-info', 'Gagal register');
        }
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/stores');
        }

        return redirect()->route('users.login')->with('failed-info', 'Email atau password salah.');
    }
}
