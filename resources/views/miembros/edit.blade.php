@extends('layouts.admin')
@section('content')

    <div class="content ml-3">
        <h1>Actualizar Datos de un Miembro</h1>

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
                        <h3 class="card-title"><strong>Actualización de Datos</strong></h3>
                    </div>

                    <div class="card-body" style="display:block;">

                       <form action="{{url('/miembros',$miembro->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="row">

                            <div class="col-md-9">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos:</label> <b>*</b>
                                            <input type="text" name="nombre_apellido" class="form-control" value="{{$miembro->nombre_apellido}}">
                                            @error('nombre_apellido')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Correo:</label> <b>*</b>
                                            <input type="email" name="email" class="form-control" value="{{$miembro->email}}">
                                            @error('email')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono:</label> <b>*</b>
                                            <input type="number" name="telefono" class="form-control" value="{{$miembro->telefono}}">
                                            @error('telefono')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento:</label> <b>*</b>
                                            <input type="date" name="fecha_nacimiento" class="form-control" value="{{$miembro->fecha_nacimiento}}">
                                            @error('fecha_nacimiento')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
            
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género:</label> <b>*</b>
                                            <select name="genero" class="form-control">
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
                                            <label for="">Curso:</label> <b>*</b>
                                            <input type="text"  name="curso" class="form-control" value="{{$miembro->curso}}">
                                            @error('curso')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección:</label> <b>*</b>
                                            <input type="text" name="direccion" class="form-control" value="{{$miembro->direccion}}">
                                            @error('direccion')
                                                <small style="color:#FF0000">* Este campo es requerido</small>
                                            @enderror
                                        </div>
                                    </div>
            
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fotografía:</label> <b>*</b>
                                    <input type="file" name="fotografia" id="file" class="form-control"><br>
                                    <center>
                                        <output id="list">
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
                                        </output>
                                    </center>
                                    <script>
                                        function archivo(evt){
                                            var files = evt.target.files;
                                            //obtenemos la imagen del campo "file".
                                            for (var i=0, f; f = files[i]; i++){
                                                //solo admitimos imagenes.
                                                if (!f.type.match('image.*')){
                                                    continue;
                                                }

                                                var reader = new FileReader();
                                                reader.onload = (function (theFile){

                                                    return function (e){
                                                        //insertamos la imagen
                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result,'"width="50%" title="', escape(theFile.name),'"/>'].join('');
                                                    };
                                                }) (f);

                                                reader.readAsDataURL(f);
                                            }
                                        }

                                        document.getElementById('file').addEventListener('change',archivo, false);

                                    </script>
                                </div>
                            </div>
                       
                       </div>

                       <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('miembros')}}" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                                    <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Actualizar</button>
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