

<header class="header">
    <nav class="navbar fixed-top">         
        <!-- Begin Search Box-->
        
        <!-- End Search Box-->
        <!-- Begin Topbar -->
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <!-- Begin Logo -->
            <div class="navbar-header">
                <a href="db-default.html" class="navbar-brand">
                    {{Auth::user()->tipo_usuario}}
                    <a href="{{ asset("admin/workana.jpg") }}">
                        <div class="brand-image">
                                <img src="{{ asset("admin/workana.jpg") }}" alt="logo" class="logo-small">
                        </div>
                    </a>
                </a>
                <!-- Toggle Button -->
                <a id="toggle-btn" href="#" class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <!-- End Toggle -->
            </div>
            <!-- End Logo -->
            <!-- Begin Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <!-- Search -->
                
                <!-- End Search -->
                <!-- Begin Notifications -->
              
                <!-- End Notifications -->
                <!-- User -->
                @if(Auth::user()->tipo_usuario=="Empresa")
                    Nombre de empresa: {{Auth::user()->name}}
                @else
                    Nombre de freelancer: {{Auth::user()->name}}
                @endif
                
                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{ asset("admin/workana.jpg") }}" alt="..." class="avatar rounded-circle"></a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                                
                            <a href="/perfil/{{Auth::user()->id}}/edit" class="edit-profil"><i class="la la-gear"></i></a>
                            <img src="{{ asset("admin/workana.jpg") }}" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a href="/perfil/{{Auth::user()->id}}/edit" class="dropdown-item"> 
                                Nombre: {{Auth::user()->name}}
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> 
                            Email: {{Auth::user()->email}}
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item no-padding-bottom"> 
                           Tipo de usuario: {{Auth::user()->tipo_usuario}}                            </a>
                        </li>
                        
                        <li><a rel="nofollow" href="/logout" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                    </ul>
                </li>
                <!-- End User -->
                <!-- Begin Quick Actions -->
                <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>
                <!-- End Quick Actions -->
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>