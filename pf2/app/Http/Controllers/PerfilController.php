<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
    //
    public function edit($id)
    {
        $perfil = User::find($id);
        return view('perfil.editaPerfil',compact('perfil'));
    }

    public function update($id)
    {
        $perfil=User::find($id);
        $perfil->name=request('txtNombre');
        $perfil->email=request('txtEmail');
        $perfil->tipo_usuario=request('select_tipo_usuario');
        $perfil->save();
        return redirect('/projects/vistaProyectos');
    }
}
