<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }

    public function signIn(Request $request)
    {
      return $request->all();
    }

    public function register()
    {
      return view('auth.register');
    }

    public function signUp(Request $request)
    {
      $request->validate([
        'email' => ['required', 'exists:users,email'],
        'password' => ['required', 'confirmed']
      ]);
      return $request->all();
    }
}
