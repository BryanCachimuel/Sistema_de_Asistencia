@extends('layouts.admin')
@section('content')

    <div class="content ml-3">
        <h1>Datos del Miembro Registrado</h1>

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Datos Registrados</strong></h3>
                    </div>

                    <div class="card-body" style="display:block;">

                        <div class="row">

                            <div class="col-md-9">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos:</label>
                                            <input type="text" name="nombre_apellido" value="{{$miembro->nombre_apellido}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Correo:</label>
                                            <input type="email" name="email" value="{{$miembro->email}}" class="form-control" disabled>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono:</label>
                                            <input type="number" name="telefono" value="{{$miembro->telefono}}" class="form-control" disabled>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento:</label>
                                            <input type="date" name="fecha_nacimiento" value="{{$miembro->fecha_nacimiento}}" class="form-control" disabled>
                                        </div>
                                    </div>
            
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género:</label>
                                            <select name="genero" class="form-control" disabled>
                                                @if ($miembro->genero == 'Masculino')
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                @else
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Masculino">Masculino</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Curso:</label>
                                            <input type="text"  name="curso" value="{{$miembro->curso}}" class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección:</label>
                                            <input type="text" name="direccion" value="{{$miembro->direccion}}" class="form-control" disabled>
                                        </div>
                                    </div>
            
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fotografía:</label> <br>
                                    @if ($miembro->fotografia == '')
                                        @if ($miembro->genero == 'Masculino')
                                            <center>
                                                <img src="{{url('img/imghombre.png')}}" width="150px">
                                            </center>
                                        @else
                                            <center>
                                                <img src="{{url('img/imgmujer.png')}}" width="150px">
                                            </center>
                                        @endif
                                    @else
                                    <center>
                                        <img src="{{asset('storage').'/'.$miembro->fotografia}}" width="150px">
                                    </center>
                                    @endif
                                    
                                </div>
                            </div>
                       
                       </div>

                       <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('miembros')}}" class="btn btn-success"><i class="bi bi-arrow-left-square-fill"></i> Regresar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection