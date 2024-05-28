@extends('layouts.admin')
@section('content')

    <div class="content ml-3">
        <h1>Curso: {{$curso->nombre_curso}}</h1>
       
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Datos Registrados del Curso</strong></h3>
                    </div>

                    <div class="card-body" style="display:block;">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nombres del Curso:</label>
                                            <input type="text" name="nombre_curso" class="form-control" value="{{$curso->nombre_curso}}" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha de Ingreso:</label>
                                            <input type="date" name="fecha_ingreso" class="form-control" value="{{$curso->fecha_ingreso}}" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Descripción:</label>
                                            <input type="text" class="form-control" name="descripcion" value="{{$curso->descripcion}}" disabled>
                                            <!--<input type="text" class="form-control" name="descripcion" value="{!!$curso->descripcion!!}" disabled>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                       <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('/cursos')}}" class="btn btn-success"><i class="bi bi-arrow-left-square-fill"></i> Regresar</a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection