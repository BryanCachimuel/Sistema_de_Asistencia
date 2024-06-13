@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>Reportes de Asistencias</h1>
      
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h3 class="card-title"><strong>Reporte de Asistencias</strong></h3>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                       
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info">
                                        <a href="{{url('asistencia/reportes_pdf')}}">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Imprimir Reporte</span>
                                        <span class="info-box-number">Asistencias</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
