<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class pagesController extends Controller
{
    //
    public function registrar()
    {
        return view('registrar');
    }

    public function registrarUser()
    {
        $user = new User();
        $user->name = request('txtNombre');
        $user->email = request('txtEmail');
        $pass = Hash::make(request('txtPassword'));
        $user->password = $pass;
        $user->remember_token = request('_token');
        $user->tipo_usuario = request('select_tipo_usuario');
        $user->descripcion = request('txtDescripcion');
        $user->save();
        return redirect('/login');
    }
}
