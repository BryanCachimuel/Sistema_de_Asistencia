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

                       <form action="">

                        <div class="row">

                            <div class="col-md-9">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos:</label><b>*</b>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Correo:</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono:</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento:</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
            
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
            
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Curso:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
            
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fotografía:</label>
                                    <input type="file" class="form-control">
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