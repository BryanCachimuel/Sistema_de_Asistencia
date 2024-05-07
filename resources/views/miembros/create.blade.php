@extends('layouts.admin')
@section('content')

    <div class="content ml-3">
        <h1>Creación de un Nuevo Miembro</h1>

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Llenado de datos de los Miembros</strong></h3>
                    </div>

                    <div class="card-body" style="display:block;">

                       <form action="{{url('/miembro')}}" method="POST" enctype="multipart/form-data" autocomplete="off">

                        <div class="row">

                            <div class="col-md-9">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos:</label> <b>*</b>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Correo:</label> <b>*</b>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono:</label> <b>*</b>
                                            <input type="number" class="form-control" required>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento:</label> <b>*</b>
                                            <input type="date" class="form-control" required>
                                        </div>
                                    </div>
            
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género:</label>
                                            <select name="" class="form-control" id="">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Curso:</label> <b>*</b>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección:</label> <b>*</b>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
            
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fotografía:</label>
                                    <input type="file" id="file" class="form-control"><br>
                                    <center>
                                        <output id="list"></output>
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
                                    <a href="" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle-fill"></i> Registrar</button>
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