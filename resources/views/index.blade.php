<!-- extiende de la plantilla admin -->
@extends('layouts.admin')
@section('content')

    <div class="content" style="margin: 20px">
        <h1>Página Principal</h1>

        <div class="row mt-4">
            <div class="col-lg-3">
                <div class="small-box bg-info" style="height: 160px">
                    <div class="inner">
                        @php
                            $contador_de_cursos = 0;
                        @endphp
                        @foreach ($cursos as $curso)
                            @php
                                 $contador_de_cursos += 1; 
                            @endphp
                        @endforeach

                        <h3><?= $contador_de_cursos; ?></h3>
                        
                        <p>Cursos</p>
                    </div>
                    <div class="icon">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <a href="{{url('cursos')}}" class="small-box-footer" style="margin-top: 20px;">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
        </div>

    </div>

@endsection     