@extends('layouts.admin')
@section('content')
    <div class="content ml-3">
        <h1>Actualización de Usuarios</h1>
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
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Revice Datos de los Usuarios</strong></h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/usuarios',$usuario->id) }}" autocomplete="off">
                            @csrf
                            {{method_field('PATCH')}}
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">Nombres</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control" name="name"
                                        value="{{ $usuario->name }}">

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
                                        class="form-control" name="email"
                                        value="{{ $usuario->email }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">Confirmar Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{url('usuarios')}}" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-check-circle-fill"></i> Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
