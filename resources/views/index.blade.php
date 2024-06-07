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

            <div class="col-lg-3">
                <div class="small-box bg-success" style="height: 160px">
                    <div class="inner">
                        @php
                            $contador_de_miembros = 0;
                        @endphp
                        @foreach ($miembros as $miembro)
                            @php
                                 $contador_de_miembros += 1; 
                            @endphp
                        @endforeach

                        <h3><?= $contador_de_miembros; ?></h3>
                        
                        <p>Miembros</p>
                    </div>
                    <div class="icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <a href="{{url('miembros')}}" class="small-box-footer" style="margin-top: 20px;">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="small-box bg-warning" style="height: 160px">
                    <div class="inner">
                        @php
                            $contador_de_usuarios = 0;
                        @endphp
                        @foreach ($usuarios as $usuario)
                            @php
                                 $contador_de_usuarios += 1; 
                            @endphp
                        @endforeach

                        <h3><?= $contador_de_usuarios; ?></h3>
                        
                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <a href="{{url('usuarios')}}" class="small-box-footer" style="margin-top: 20px;">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div>

@endsection     