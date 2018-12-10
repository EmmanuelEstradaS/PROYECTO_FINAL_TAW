<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use Auth;
use Illuminate\Support\Facades\DB;
use App\comentarios;
use App\User;
use App\Propuesta;

class ProjectsController extends Controller
{
    //
    public function show($id)
    {
        
    }

    public function create()
    {
        return view('projects.create');
    }

    public function vistaProyectos()
    {
        $projects=projects::all();
        return view('projects.vista_proyectos',compact('projects'));
    }

    public function store()
    {
        $project = new projects();
        $project->nombre=request('txtNombre');
        $project->categoria=request('select_categoria');
        $project->tipo_proyecto=request('select_que_necesitas');
        $project->tipo_pago=request('select_pago');
        $project->pago=request('txtPago');
        $project->descripcion=request('txtDescripcion');
        $project->id_usuario=Auth::user()->id;
        $project->nombre_usuario=Auth::user()->name;
        $project->save();
        return  redirect('/projects/vistaProyectos');
    }


    public function edit($id)
    {
        $project = projects::find($id);
        return view('projects.editarProject', compact('project'));
    }

    public function vistaProyectosEmpresas()
    {
        $projects=projects::all();
        return view('projects.todosLosProyectosEmpresas',compact('projects'));
    }

    public function vistaPropuestas()
    {
        $propuestas=Propuesta::all();
        return view('propuestas.listado_propuestas',compact('propuestas'));
    }


    
    public function update($id)
    {
        $project=projects::find($id);
        $project->nombre=request('txtNombre');
        $project->categoria=request('select_categoria');
        $project->tipo_proyecto=request('select_que_necesitas');
        $project->tipo_pago=request('select_pago');
        $project->pago=request('txtPago');
        $project->descripcion=request('txtDescripcion');
        $project->status=request('status');
        $project->save();
        return redirect('/projects/vistaProyectos');
    }

    public function update_id_freelancer($id_propuesta,$id_freelancer,$id_proyecto)
    {
        
        $project = projects::find($id_proyecto);
        $project->id_freelancer = $id_freelancer;
        $project->status='Asignado';
        $project->save();

        $propuesta = Propuesta::find($id_propuesta);
        $propuesta->status='Aceptada';
        $propuesta->save();
        return redirect('/propuestas/propuestas_freelancer');
    }




    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }

    public function info_proyecto($id)
    {
        $project = projects::find($id);
        $detalles = DB::table('users')
            ->select("users.id","users.name","users.email","users.created_at","users.tipo_usuario","users.descripcion")
            ->where('users.id', $project->id_usuario)
            ->get();
        return view('projects.detalles_proyecto')->with('detalles',$detalles)->with('project',$project);
    }

    public function info_propuesta($id)
    {
        $project = Propuesta::find($id);
        $detalles = DB::table('users')
            ->select("users.id","users.name","users.email","users.created_at","users.tipo_usuario","users.descripcion")
            ->where('users.id', $project->id_freelancer)
            ->get();
        return view('propuestas.detalle_propuesta')->with('detalles',$detalles)->with('project',$project);
    }

    public function comentariosAmiEmpresa($id)
    {
        $datosUser = User::find(Auth::user()->id);
        $comentarios = DB::table('comentarios')
            ->select("comentarios.id","comentarios.id_usuario_sesion","comentarios.nombre_usuario_sesion","comentarios.id_usuario_comentario","comentarios.nombre","comentarios.comentario","comentarios.created_at")
            ->where('comentarios.id_usuario_comentario', $id)
            ->get();
        return view('comentarios.comentariosAmiEmpresa',compact('comentarios','datosUser'));
    }

    public function solicitudProyecto($id_proyecto,$id_empresa)
    { 
        $project = projects::find($id_proyecto);
        $empresa = User::find($id_empresa);
        return view('solicitudProyecto.solicitud',compact('project','empresa'));
    }

    public function solicitudProyectoPropuesta($id_empresa,$id_proyecto)
    {
        $proyecto = projects::find($id_proyecto);
        $empresa = User::find($id_empresa);

        $propuesta = new Propuesta();
        $propuesta->id_freelancer = Auth::user()->id;
        $propuesta->nombre_freelancer = Auth::user()->name;
        $propuesta->id_proyecto = $id_proyecto;
        $propuesta->nombre_proyecto = $proyecto->nombre;
        $propuesta->id_empresa = $id_empresa;
        $propuesta->nombre_empresa = $empresa->name;
        $propuesta->propuesta_freelancer = request('txtPropuesta');
        $propuesta->save();
        return  redirect('/projects/vistaProyectos');
    }

    public function rechazarPropuesta($id_propuesta)
    {
        $propuesta = Propuesta::find($id_propuesta);
        $propuesta->status='Rechazada';
        $propuesta->save();
        return  redirect('/projects/vistaProyectos');
    }
    
}
