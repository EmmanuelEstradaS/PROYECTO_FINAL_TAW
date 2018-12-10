@if($user = Auth::check())

<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <span class="heading">Menú</span>
        <ul class="list-unstyled">

            <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>Mis proyectos</span></a>
                <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                    <li><a href="/projects/vistaProyectos">Listado de mis proyectos</a></li>
                    @if(Auth::user()->tipo_usuario== "Empresa")
                    <li><a href="/projects/create">Agregar proyecto</a></li>
                    @endif
                </ul>
            </li>

            @if(Auth::user()->tipo_usuario== "Empresa")
                <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i class="la la-calendar-check-o"></i><span>Freelancers</span></a>
                    <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                        <li><a href="/users/vistaUsuarios">Listado de Freelancers</a></li>
                    </ul>
                </li>
            @else
                <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i class="la la-calendar-check-o"></i><span>Empresas</span></a>
                    <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                        <li><a href="/users/vistaUsuarios">Listado de Empresas</a></li>
                    </ul>
                </li>    
            @endif

            <li><a href="#dropdown-forms" aria-expanded="false" data-toggle="collapse"><i class="la la-birthday-cake"></i><span>Comentarios</span></a>
                <ul id="dropdown-forms" class="collapse list-unstyled pt-0">
                <li><a href="/comentariosAmiEmpresa/{{Auth::user()->id}}">Listado de comentarios</a></li>
                </ul>
            </li>

            @if(Auth::user()->tipo_usuario== "Freelancer")
            <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i class="la la-gear"></i><span>Proyectos de empresas</span></a>
                <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                    <li><a href="/projects/vistaProyectosEmpresas">Listado de proyectos de empresas</a></li>
                </ul>
            </li>
            @endif


            
                <li><a href="#dropdown-db" aria-expanded="false" data-toggle="collapse"><i class="la la-columns"></i><span>Propuestas</span></a>
                    <ul id="dropdown-db" class="collapse list-unstyled pt-0">
                        <li><a href="/propuestas/propuestas_freelancer">Listado de Propuestas</a></li>
                    </ul>
                </li>
            
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>


@endif