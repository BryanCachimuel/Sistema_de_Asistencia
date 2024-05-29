@extends('layouts.admin')
@section('content')

    <div class="content ml-3">
        <h1>Actualización de Datos de un Curso</h1>

        <!-- imprimir en una lista los errores 
        @foreach ($errors->all() as $err)
            <div class="alert alert-danger">
                <li>{{$err}}</li>
            </div>
         @endforeach-->
       

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Revice de datos del Curso</strong></h3>
                    </div>

                    <div class="card-body" style="display:block;">

                       <form action="{{url('/cursos',$curso->id)}}" method="POST" autocomplete="off">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nombres del Curso:</label> <b>*</b>
                                            <input type="text" name="nombre_curso" class="form-control" value="{{$curso->nombre_curso}}">
                                            @error('nombre_curso')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha de Ingreso:</label> <b>*</b>
                                            <input type="date" name="fecha_ingreso" class="form-control" value="{!!$curso->fecha_ingreso!!}">
                                            @error('fecha_ingreso')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Descripción:</label>  <b>*</b>
                                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{$curso->descripcion}}</textarea>
                                            <script>
                                                CKEDITOR.replace('descripcion');
                                            </script>
                                            @error('descripcion')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                       <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('cursos')}}" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Actualizar Registrar</button>
                                </div>
                            </div>
                        </div>

                       </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection