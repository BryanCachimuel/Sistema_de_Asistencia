@extends('layouts.admin')

@section('content')
    <div class="content ml-3">
        <h1>Detalle de la Asistencia</h1>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-primary">
                        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <span class="card-title">Detalle de la Asistencia</span>
                            </div>
                        </div>

                        <div class="card-body bg-white">

                            <div class="row mb-3">
                                <label for="fecha" class="col-md-4 col-form-label text-md-end">Fecha: </label>

                                <div class="col-md-6">
                                    <input id="fecha" type="text" class="form-control"
                                        value="{{ $asistencia->fecha }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombres del Miembro:
                                </label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control"
                                        value="{{ $asistencia->miembro->nombre_apellido }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ url('asistencias') }}" class="btn btn-success"><i
                                            class="bi bi-x-circle-fill"></i> Regresar</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
