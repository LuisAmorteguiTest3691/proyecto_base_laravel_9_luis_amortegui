<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // metodo para obtener datos del servidor
    public function index()
    {
        return view('auth.register');
    }

    // metodo para envio datos al servidor
    public function store(Request $request)
    {
        // dd($request);

        // Modificar request para mostrar erro cuando se duplica username
        $request->request->add(['username' => Str::slug($request->username)]);

        // validacion
        $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // redirigir
        return redirect()->route('post.index');
    }
}
