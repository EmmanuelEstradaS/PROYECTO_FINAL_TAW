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
                @if(Auth::user()->tipo_usuario == "Empresa")
                    <h2 class="page-header-title">Listado de freelancers</h2>
                @else
                    <h2 class="page-header-title">Listado de empresas</h2>
                @endif
            </div>
        </div>
    </div>    
    <div class="widget has-shadow">
        
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
                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Pais: activate to sort column ascending" style="width: 72px;">Email
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 86px;">Tipo Usuario
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 86px;">Ver perfil</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              
                            @foreach ($users as $user)
                                @if($user->tipo_usuario != Auth::user()->tipo_usuario)
                                    <tr role="row" class="odd">
                                        <td> {{$user->id}} </td>
                                        <td> {{$user->name}} </td>
                                        <td> {{$user->email}} </td>
                                        <td> {{$user->tipo_usuario}} </td>
                                                               
                                        <td> <a title="Editar" href="/users/{{$user->id}}/info-freelancer"> <button class="btn hor-grd btn-grd-warning "><i class="fa fa-edit"></i> Información </button></a> </td>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
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