<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\comentarios;

class UsersController extends Controller
{
    public function vistaUsuarios()
    {
        $users=User::all();
        return view('users.vista_usuarios',compact('users'));
    }

    public function informacion($id)
    {
     
        $user = User::find($id);
        $comentarios_usuario = comentarios::all();
        return view('users.perfil_freelancer', compact('user','comentarios_usuario'));
    }

    public function comentario($id_usuario_sesion,$nombre_usuario_sesion,$id_usuario_comentario,$nombre)
    {
        $id_usuario_comentado = $id_usuario_comentario;
        $comentario = new comentarios();
        $comentario->id_usuario_sesion = $id_usuario_sesion;
        $comentario->nombre_usuario_sesion = $nombre_usuario_sesion;
        $comentario->id_usuario_comentario = $id_usuario_comentario;
        $comentario->nombre = $nombre;
        $comentario->comentario=request('txtComentario');
        $comentario->save();
        return  redirect("/users/$id_usuario_comentado/info-freelancer");
    }
}
