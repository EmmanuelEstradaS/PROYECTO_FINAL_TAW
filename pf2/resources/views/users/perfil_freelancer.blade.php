

@extends('layouts.template')
@extends('layouts.navegacion')
@extends('layouts.header')

@section('content')

    <div class="content-inner">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{ asset("admin/assets/img/logo.png") }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page db-social about">
            
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="compact-sidebar light-sidebar has-shadow">
                     
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
					<div class="jumbotron jumbotron-fluid"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>
                                                    <li>
                                                        <div class="counter">8234</div>
                                                        <div class="heading">Comentarios</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">357</div>
                                                        <div class="heading">Likes</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">23</div>
                                                        <div class="heading">Products</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <img class="rounded-circle" src="{{ asset("admin/assets/img/avatar/avatar-01.jpg") }}" alt="...">
                                                </div>
                                                <div class="infos">
                                                    <h2>{{$user->name}}</h2>
                                                    <div class="location">{{$user->email}}</div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-shadow" href="#"><i class="ti-pencil-alt"></i>Hacer comentario</a>
                                                    <div class="actions dark">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="#" class="dropdown-item"> 
                                                                    Report
                                                                </a>
                                                                <a href="#" class="dropdown-item"> 
                                                                    Block
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row flex-row">
                                    <div class="col-xl-5">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Información general</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Perfil profesional:</div>
                                                    <div class="about-text">
                                                    {{$user->descripcion}}
                                                    </div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Correo electronico:</div>
                                                    <div class="about-text">{{$user->email}}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Tipo de usuario:</div>
                                                    <div class="about-text">{{$user->tipo_usuario}}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Fecha de registro:</div>
                                                    <div class="about-text">{{ $user->created_at }}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title mr-auto">Ratings (21):</div>
                                                    <div class="about-text">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- Begin Column -->
                                    <div class="col-xl-7 column">
                                        <!-- Begin Education -->
                                        <form class="needs-validation" novalidate="" method="post" action="/users/{{Auth::user()->id}}/{{Auth::user()->name}}/{{$user->id}}/{{$user->name}}/comentario">
                                            {{ csrf_field() }}
                                            <div class="widget has-shadow">
                                                <div class="ti-pencil-alt widget-header bordered no-actions d-flex align-items-center">
                                                    <h4> Hacer comentario.</h4>
                                                </div>
                                                <div class="widget-body">
                                                    <div class="about-infos d-flex flex-column">
                                                        <div class="about-title">Comentario:</div>
                                                        <div class="about-text">
                                                            <div class="form-group row d-flex align-items-center mb-5">
                                                                <div class="col-lg-12">
                                                                    <textarea name="txtComentario" id="txtComentario" rows="5" class="form-control" placeholder="Escribe tu comentario aquí ..." required></textarea>
                                                                    <div class="invalid-feedback">
                                                                        Por favor escribe un mensaje
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                    <button class="btn btn-gradient-01" name="btnEnviar" type="submit">Guardar comentario</button>
                                                                <button class="btn btn-shadow" type="reset">Borrar datos</button>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Education -->
                                        
                                        <!-- Inicio Comentarios -->
                                        @foreach ($comentarios_usuario as $comentario)
                                            @if($comentario->id_usuario_comentario == $user->id)
                                            <form class="needs-validation" novalidate="" method="post" action="/users/{{Auth::user()->id}}/{{Auth::user()->name}}/{{$user->id}}/{{$user->name}}/comentario">
                                                {{ csrf_field() }}
                                                <div class="widget has-shadow">
                                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                                        @if(Auth::user()->tipo_usuario == "Empresa")
                                                            <h4> Empresa: {{ $comentario->nombre_usuario_sesion }}</h4>
                                                        @else
                                                            <h4> Freelancer: {{ $comentario->nombre_usuario_sesion }}</h4>
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="widget-body">
                                                        <div class="about-infos d-flex flex-column">
                                                            <div class="about-title">Comentario:</div>
                                                            <div class="about-text">
                                                                {{ $comentario->comentario }}                                                                   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            @endif
                                        @endforeach
                                        <!-- Fin comentarios -->
                                    </div>
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                     
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
    </div>

    @endsection