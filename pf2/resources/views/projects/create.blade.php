
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
                    <h2 class="page-header-title">Registrar Proyecto</h2>
                    
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>Agregar proyecto</h4>
                       
                    </div>
                    <div class="widget-body">
                        <form class="needs-validation" novalidate="" method="post" action="/projects">
                          {{ csrf_field() }}
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre *</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" required="">
                                    <div class="invalid-feedback">
                                        Por favor ingresa un nombre
                                    </div>
                                </div>
                            </div>
                          
                          <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Categoria *</label>
                                <div class="col-lg-5">
                                    <select class="form-control" name="select_categoria" required="">
                                      <option value="Programación para móviles">Programación para móviles</option>
                                      <option value="Programacion web">Programacion web</option>
                                      <option value="Diseño de logo">Diseño de logo</option>
                                      <option value="Diseño web">Diseño web</option>
                                      <option value="Redaccion de artículos">Redaccion de artículos</option>
                                      <option value="E-comerce">E-comerce</option>
                                      <option value="WordPress">WordPress</option>
                                      <option value="Otros">Otros...</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">¿Que necesitas? *</label>
                                <div class="col-lg-5">
                                    <select class="form-control" name="select_que_necesitas" required="">
                                      <option value="Crear un proyecto">Crear un proyecto</option>
                                      <option value="Migracion de un proyecto">Migracion de un proyecto</option>
                                      <option value="Modificar un proyecto existebte">Modificar un proyecto existebte</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tipo de pago *</label>
                                <div class="col-lg-5">
                                    <select class="form-control" name="select_pago" required="">
                                      <option value="Por proyecto">Por proyecto</option>
                                      <option value="Por hora">Por hora</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Monto de pago $ *</label>
                                <div class="col-lg-5">
                                    <input type="number" class="form-control" name="txtPago" placeholder="Monto de pago" required="">
                                    <div class="invalid-feedback">
                                        Por favor ingresa el monto de pago
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Descripcion *</label>
                                <div class="col-lg-5">
                                <textarea name="txtDescripcion" id="txtDescripcion" class="form-control" rows="2" cols="50"  value="" required> </textarea> 
                                    <div class="invalid-feedback">
                                        Por favor ingresa una descripcion
                                    </div>
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
    