@extends('layouts.admin')
@section('content')
    <div class="content ml-3">
        <h1>Datos del Usuarios</h1>
        <!--TODO: si existe una sesión con el nombre mensaje va a aparecer está alerta -->
        @if ($message = Session::get('mensaje'))
            <script>
                Swal.fire({
                    title: "Proceso Exitoso",
                    text: "{{ $message }}",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 2500
                });
            </script>
        @endif

        <div class="row">
            <div class="col-md-11 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Datos del Usuario</strong></h3>
                    </div>

                    <div class="card-body">

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">Nombres</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control"
                                        value="{{$usuario->name}}" disabled>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">Correo</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control"
                                        value="{{ $usuario->email }}" disabled>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">Fecha Ingreso</label>

                                <div class="col-md-6">
                                    <input id="fecha_ingreso" type="text"
                                        class="form-control" value="{{ $usuario->fecha_ingreso }}" disabled>

                                    @error('fecha_ingreso')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{url('usuarios')}}" class="btn btn-success"><i class="bi bi-x-circle-fill"></i> Regresar</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
