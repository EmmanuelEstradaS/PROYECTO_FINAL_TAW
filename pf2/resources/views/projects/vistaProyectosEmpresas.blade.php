
@if($user = Auth::check())



@extends('layouts.template')
@extends('layouts.navegacion')
@extends('layouts.header')

@section('content')

<div class="content-inner">
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Proyectos de empresas</h2>
            </div>
        </div>
    </div>    
    <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            @if(Auth::user()->tipo_usuario == "Empresa")
            <a title="Dar servicio" href="/projects/create"> 
              <button type="button" class="btn btn-success mr-1 mb-2"><i class="la la-plus-circle"></i>Agregar proyectos</button>
            </a>
            @endif
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                    <div class="col-sm-12">
                        <table id="sorting-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="sorting-table_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 76px;">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 143px;">Nombre
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Pais: activate to sort column ascending" style="width: 72px;">Categoria
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 86px;">Tipo proyecto
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 74px;">Tipo pago
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 74px;">Pago
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 74px;">Descripcion
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 74px;">Status
                                    </th>
                                    @if(Auth::user()->tipo_usuario == "Empresa")
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 74px;">Editar
                                    </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                              
                            @if(Auth::user()->tipo_usuario == "Freelancer")    
                                @foreach ($projects as $project)
                                    <tr role="row" class="odd">
                                        <td> {{$project->id}} </td>
                                        <td> {{$project->nombre}} </td>
                                        <td> {{$project->categoria}} </td>
                                        <td> {{$project->tipo_proyecto}} </td>
                                        <td> {{$project->tipo_pago}} </td>
                                        <td> {{$project->pago}} </td>
                                        <td> {{$project->descripcion}} </td>
                                        <td> {{$project->status}} </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- END widget has-shadow-->  
        </div>
    <!-- END content fluid-->  
    </div>
<!-- END content inner--> 
</div>

<ul>
        
    </ul>
    
@endsection
 
@endif