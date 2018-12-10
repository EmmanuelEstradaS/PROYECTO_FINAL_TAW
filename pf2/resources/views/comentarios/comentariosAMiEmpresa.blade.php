


@extends('layouts.template')
@extends('layouts.navegacion')
@extends('layouts.header')

@section('content')
                <div class="content-inner profile">


<!-- Begin Preloader -->
<div id="preloader">
        <div class="canvas">
            <img src="{{ asset("admin/assets/img/logo.png") }}" alt="logo" class="loader-logo">
            <div class="spinner"></div>   
        </div>
    </div>
    <!-- End Preloader -->
    <div class="page db-social">
        
        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">
           
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
                                                    <div class="heading">Followers</div>
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
                                                <h2>Mi empresa</h2>
                                                <div class="location">{{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Head Profile -->
                            <div class="row">
                                <div class="col-xl-3 column">
                                    <!-- Begin About -->
                                    <div class="widget has-shadow">
                                        <div class="widget-header bordered no-actions d-flex align-items-center">
                                            <h5>Acerca de mí</h5>
                                        </div>
                                        <div class="widget-body">
                                            <p>
                                                {{ $datosUser->descripcion }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End About -->
                                    <!-- Begin Twitter Feed -->
                                    <div class="widget has-shadow">
                                        <div class="widget-header bordered no-actions d-flex align-items-center">
                                            <h5>Correo electrónico</h5>
                                        </div>
                                        <div class="widget-body p-0">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <div class="text-dark pb-2">
                                                                <i class="ion-social-twitter align-middle text-twitter pr-2"></i>{{ $datosUser->email }}
                                                            </div>
                                                            <p>
                                                                Correo de contacto para informes
                                                            </p>
                                                            <small>1 hour ago</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Twitter Feed -->
                                                                    </div>
                                <!-- End Col -->

                                <!-- Begin Timeline -->
                                <div class="col-xl-6">
                                    <!-- Begin Widget -->
                                    <div class="widget has-shadow">
                                        <!-- Begin Widget Header -->
                                        <div class="widget-header d-flex align-items-center">
                                            <div class="user-image">
                                                <img class="rounded-circle" src="{{ asset("admin/assets/img/avatar/avatar-01.jpg") }}" alt="...">
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title">
                                                    @if(Auth::user()->tipo_usuario=="Empresa")
                                                        <span class="username">Comentarios de freelancers</span>
                                                    @else
                                                        <span class="username">Comentarios de empresas</span>
                                                    @endif
                                                    
                                                </div>
                                                <div class="time">25 min ago</div>
                                            </div>
                                            <div class="widget-options">
                                                <div class="dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                        <i class="la la-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="javascript:void(0);" class="dropdown-item"> 
                                                            <i class="la la-edit"></i>Edit Post
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item"> 
                                                            <i class="la la-trash"></i>Delete Post
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item"> 
                                                            <i class="la la-bell-slash"></i>Disable Notifications
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item faq"> 
                                                            <i class="la la-question-circle"></i>FAQ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Widget Header -->
                                        



                                        <!-- Begin Reply -->
                                        @foreach ($comentarios as $comentario)
                                            <div class="reply">
                                                <div class="reply-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Nombre: {{$comentario->nombre_usuario_sesion}}</span>
                                                        </div>
                                                        <div class="time">{{$comentario->created_at}}</div>
                                                    </div>
                                                </div>
                                                <div class="reply-body">
                                                    <p>
                                                            Comentario: {{$comentario->comentario}}
                                                    </p>
                                                </div>
                                                <div class="reply-footer d-flex align-items-center">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-flag"></i>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach    


                                        
                                        <!-- End Reply -->
                                    </div>
                                    <!-- End Widget -->
                                </div>
                                <!-- End Timeline -->

                                <!-- Begin Column -->
                                <div class="col-xl-3 column">
                                    <!-- Begin Badge -->
                                    <div class="widget has-shadow">
                                        <div class="new-badge text-center">
                                            <div class="badge-img">
                                                <i class="ion-fireball"></i>
                                            </div>
                                            <div class="title">
                                                <div class="heading">Felicidades</div>
                                                @if(Auth::user()->tipo_usuario=="Empresa")
                                                    <div class="text">Tu empresa va creciendo</div>
                                                @else
                                                    <div class="text">Tu perfil eres un buen freelancer</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Badge -->
                                    <!-- Begin Friends -->
                                    <div class="widget has-shadow">
                                        <div class="widget-header bordered no-actions d-flex align-items-center">
                                            <h5>Proyectos (10)</h5>
                                        </div>
                                    </div>
                                    <!-- End Friends -->
                                   
                                    <!-- Begin Social Network -->
                                    <div class="widget no-bg text-center">
                                        <ul class="social-network">
                                            <li>
                                                <a href="javascript:void(0);" class="ico-facebook" title="Facebook">
                                                    <i class="ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="ico-twitter" title="Twitter">
                                                    <i class="ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="ico-youtube" title="Youtube">
                                                    <i class="ion-social-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="ico-linkedin" title="Linkedin">
                                                    <i class="ion-social-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Social Networks -->
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

@endsection    