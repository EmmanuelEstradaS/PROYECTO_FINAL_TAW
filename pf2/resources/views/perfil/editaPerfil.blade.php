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
                    <h2 class="page-header-title">Editar información</h2>
                    
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>Editar información</h4>
                       
                    </div>
                    <div class="widget-body">
                        <form method="POST" action="" class="needs-validation" novalidate="">   
                          
                            {{ csrf_field() }}
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre *</label>
                                <div class="col-lg-5">
                                    <input type="text" value="{{$perfil->name}}" class="form-control" name="txtNombre" placeholder="Nombre" required="">
                                    <div class="invalid-feedback">
                                        Por favor ingresa un nombre
                                    </div>
                                </div>
                            </div>
                          
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email *</label>
                                <div class="col-lg-5">
                                    <input type="email" value="{{$perfil->email}}" class="form-control" name="txtEmail" placeholder="Email" required="">
                                    <div class="invalid-feedback">
                                        Por favor ingresa un email
                                    </div>
                                </div>
                            </div>

                          <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tipo usuario *</label>
                                <div class="col-lg-5">
                                    <select class="form-control" name="select_tipo_usuario" required="">
                                        <option value="Empresa">{{$perfil->tipo_usuario}}</option>
                                      <option value="Empresa">Empresa</option>
                                      <option value="Freelancer">Freelancer</option>
                                    </select>
                                </div>
                            </div>
                          
                            <div class="text-right">
                                <button class="btn btn-gradient-01" name="btnEnviar" type="submit">Guardar</button>
                                <button class="btn btn-shadow" type="reset">Borrar datos</button>
                            </div>
                        </form>
                       
                         
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->



    @endsection

