
@extends('layouts.template')
@extends('layouts.navegacion')
@extends('layouts.header')

@section('content')
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Proyecto: {{$project->nombre}} </h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5">
                                            <img src="{{ asset("admin/assets/img/avatar/avatar-01.jpg") }}" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                                        </div>
                                        <h3 class="text-center mt-3 mb-1">Información sobre la empresa:  </h3>
                                        <p class="text-center">Nombre: {{$detalles[0]->name}}</p>
                                        <p class="text-center">Correo: {{$detalles[0]->email}}</p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                        <div class="c-icon">
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="ti ti-comment-alt"></i> Descripción</a>
                                            </li>
                                            </div>
                                            <textarea name="txtDescripcion" disabled id="txtDescripcion" class="form-control" rows="5" cols="50"  value="" required>{{$detalles[0]->descripcion}} </textarea> 
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Información del proyecto</h4>
                                    </div>
                                    <div class="widget-body">


                                        
                                        <form class="form-horizontal" method="post" action="/solicitud/Proyecto/{{$project->id}}/{{$detalles[0]->id}}">
                                            {{ csrf_field() }}
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Nombre </label>
                                                <div class="col-lg-6">
                                                    <input name="txtNombre" type="text" class="form-control" placeholder="{{$project->nombre}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Categoria</label>
                                                <div class="col-lg-6">
                                                    <input name="txtCategoria" type="text" class="form-control" placeholder="{{$project->categoria}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Tipo de pago</label>
                                                <div class="col-lg-6">
                                                    <input name="txtTipoPago" type="text" class="form-control" placeholder="{{$project->tipo_pago}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Pago </label>
                                                <div class="col-lg-6">
                                                    <input name="txtPago" type="text" class="form-control" placeholder="$ {{$project->pago}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Estado</label>
                                                <div class="col-lg-6">
                                                    <input name="txtEstado" type="text" class="form-control" placeholder="{{$project->status}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Descripcion</label>
                                                <div class="col-lg-8">
                                                    <textarea name="txtDescripcion" name="txtDescripcion" id="txtDescripcion" disabled class="form-control" rows="5" cols="50"  value="" required> {{$project->descripcion}}</textarea> 
                                                </div>
                                            </div>
                                            <div class="em-separator separator-dashed"></div>
                                            @if($project->status=="Disponible")
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-gradient-01">Solicitar proyecto</button>
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
@endsection