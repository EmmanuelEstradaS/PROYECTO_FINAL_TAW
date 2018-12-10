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
                <h2 class="page-header-title">Solicitud de proyecto</h2>
                
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row flex-row">
        <div class="col-xl-12">
            <!-- Form -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Tu propuesta para el proyecto: "{{ $project->nombre }}" que tiene por dueño a la empresa: "{{ $empresa->name }}"</h4>
                   
                </div>
                <form class="needs-validation" novalidate="" method="post" action="/solicitud/proyecto/propuesta/{{$empresa->id}}/{{$project->id}}">
                    {{ csrf_field() }}
                    <div class="widget-body">
                        <div class="about-infos d-flex flex-column">
                            <label class="form-control-label">Escribe tu propuesta *</label>
                            <div class="about-text">
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <div class="col-lg-12">
                                        <textarea name="txtPropuesta" id="txtPropuesta" rows="12" class="form-control" placeholder="Escribe tu propuesta de proyecto aquí ..." required></textarea>
                                        <div class="invalid-feedback">
                                            Por favor escribe una propuesta para este proyecto
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                        <button class="btn btn-gradient-01" name="btnEnviar" type="submit">Enviar propuesta</button>
                                    <button class="btn btn-shadow" type="reset">Borrar datos</button>
                                </div>    
                            </div>
                        </div>
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