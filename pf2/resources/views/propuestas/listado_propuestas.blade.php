

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
<div class="page db-social">
    
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
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
                                                <div class="counter">246</div>
                                                <div class="heading">Propuestas</div>
                                            </li>
                                            <li>
                                                <div class="counter">30</div>
                                                <div class="heading">Online</div>
                                            </li>
                                            <li>
                                                <div class="counter">216</div>
                                                <div class="heading">Offline</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                        <div class="image-default">
                                            <img class="rounded-circle" src="{{ asset("admin/assets/img/avatar/avatar-01.jpg") }}" alt="...">
                                        </div>
                                        <div class="infos">
                                            <h2>{{Auth::user()->name}}</h2>
                                            <div class="location">Listado de propuestass</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Head Profile -->

                        <div class="row flex-row">


                            @foreach ($propuestas as $propuesta) 
                                @if(Auth::user()->id==$propuesta->id_empresa)
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                                        <!-- Begin Card -->
                                        <div class="widget-image has-shadow">
                                            <div class="contact-card-2">
                                                <div class="cover-bg">
                                                    <img src="{{ asset("admin/assets/img/cover/01.jpg") }}" class="img-fluid" alt="...">
                                                </div>
                                                <!-- Begin Widget Body -->
                                                <div class="widget-body">
                                                    <div class="cover-image mx-auto">
                                                        <img src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="..." class="rounded-circle mx-auto">
                                                    </div>
                                                    <h4 class="name"><a href="#">Nombre Freelancers: </a></h4>
                                                    <span class="text">{{$propuesta->nombre_freelancer}}</span>

                                                    <div class="social-friends owl-carousel mb-3">
                                                        <div class="item">
                                                            <div class="stats">
                                                                <div class="row d-flex justify-content-between">
                                                                    <div class="col">
                                                                        <span class="counter">Proyecto</span> 
                                                                        <span class="text">{{$propuesta->nombre_proyecto}}</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="counter">Estado2</span> 
                                                                        <span class="text">{{$propuesta->status}}</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="counter">Fecha:</span> 
                                                                        
                                                                        <span class="text">{{$propuesta->created_at}}</span>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>    
                                                        
                                                    <div class="text-center pt-5 pb-3">
                                                        <a href="/propuestas/{{$propuesta->id}}/info-propuesta" class="btn btn-gradient-01">Ver detalles</a>
                                                    </div>
                                                </div>
                                                <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div> 
                                @endif

                                @if(Auth::user()->id==$propuesta->id_freelancer)
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                                        <!-- Begin Card -->
                                        <div class="widget-image has-shadow">
                                            <div class="contact-card-2">
                                                <div class="cover-bg">
                                                    <img src="{{ asset("admin/assets/img/cover/01.jpg") }}" class="img-fluid" alt="...">
                                                </div>
                                                <!-- Begin Widget Body -->
                                                <div class="widget-body">
                                                    <div class="cover-image mx-auto">
                                                        <img src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="..." class="rounded-circle mx-auto">
                                                    </div>
                                                    <h4 class="name"><a href="#">Nombre Freelancers: </a></h4>
                                                    <span class="text">{{$propuesta->nombre_freelancer}}</span>

                                                    <div class="social-friends owl-carousel mb-3">
                                                        <div class="item">
                                                            <div class="stats">
                                                                <div class="row d-flex justify-content-between">
                                                                    <div class="col">
                                                                        <span class="counter">Proyecto</span> 
                                                                        <span class="text">{{$propuesta->nombre_proyecto}}</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="counter">Estado2</span> 
                                                                        <span class="text">{{$propuesta->status}}</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="counter">Fecha:</span> 
                                                                        
                                                                        <span class="text">{{$propuesta->created_at}}</span>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>    
                                                    @if($propuesta->status=="Aceptada")    
                                                        <div class="text-center pt-5 pb-3">
                                                            <a href="/propuestas/{{$propuesta->id}}/info-propuesta" class="btn btn-gradient-01">Ver detalles</a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div> 
                                @endif
                            @endforeach

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
</div>

@endsection