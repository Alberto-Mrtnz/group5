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
            return redirect('/');
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
            'birthday' => 'required'
        ]);

        if(User::create($datosVerificados)) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Correo incorrecto',
            'password' => 'Contraseña incorrecta',
            'name' => 'Nombre requerido',
            'birthday' => 'Cumpleaños requerido'
        ]);

    }

}
