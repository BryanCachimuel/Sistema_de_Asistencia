@extends('layouts.admin')
@section('content')
    
    <div class="content ml-3">
        <h1>Listado de Miembros</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Miembros Registrados</strong></h3>
                       
                    </div>

                    <div class="card-body" style="display:block;">

                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Teléfono</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Género</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $contador = 0;
                                @endphp
                                @foreach($miembros as $miembro)
                                <tr>
                                    <td>@php echo $contador += 1 @endphp</td>
                                    <td>{{$miembro->nombre_apellido}}</td>
                                    <td>{{$miembro->telefono}}</td>
                                    <td>{{$miembro->fecha_nacimiento}}</td>
                                    <td>{{$miembro->genero}}</td>
                                    <td>{{$miembro->email}}</td>
                                    <td>{{$miembro->estado}}</td>
                                    <td>{{$miembro->fecha_ingreso}}</td>
                                    <td></td>
                                </tr>
                                 @endforeach
                            </tbody>
                          </table>
          
                        
                        <!-- Datos del DataTable -->
                        <script>
                            $(function () {
                                $("#example1").DataTable({
                                    "responsive": true, "lengthChange": true, "autoWidth": false,
                                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection