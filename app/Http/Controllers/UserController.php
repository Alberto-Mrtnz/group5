<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $datosVerificados = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($datosVerificados)) {
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Correo incorrecto',
            'password' => 'Contraseña incorrecta'
        ]);
    }

    public function create(Request $request)
    {
        $datosVerificados = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'name' => 'required|min:3',
            'birthday' => 'required',
            'phone' => 'required',
            'is_provider' => 'required|boolean'
        ]);

        $user = User::create($datosVerificados);

        if($user) {
            Auth::login($user);
            return redirect('/home');
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->regenerate();
        return redirect('login');
    }
}
