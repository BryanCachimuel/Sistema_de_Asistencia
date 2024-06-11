@extends('layouts.admin')

@section('content')
<div class="content ml-3">
    <h1>Actualización de Asistencia</h1>
    <div class="row">
        <section class="content container-fluid">
                <div class="col-md-11 mt-2">

                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title"><strong>Revice Datos de las Asistencias</strong></h3>
                        </div>
                        <div class="card-body bg-white">
                            <form method="POST" action="{{ route('asistencias.update', $asistencia->id) }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf

                                @include('asistencia.form')

                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection
