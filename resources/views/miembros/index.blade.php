@extends('layouts.admin')
@section('content')
    
    <div class="content ml-3">
        <h1>Listado de Miembros</h1>
        <!--TODO: si existe una sesión con el nombre mensaje va a aparecer está alerta -->
        @if ($message = Session::get('mensaje'))
            <script>
                Swal.fire({
                    title: "Proceso Exitoso",
                    text: "{{$message}}",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 2500
                });
            </script> 
        @endif

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Miembros Registrados</strong></h3>
                       <div class="card-tools">
                            <a href="{{url('/miembros/create')}}" class="btn btn-primary">
                                <i class="bi bi-person-fill-add"></i> Agregar Nuevo Miembro
                            </a>
                       </div>
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
                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('miembros',$miembro->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                                            <a href="{{route('miembros.edit',$miembro->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                          </div>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                          </table>
          
                        
                        <!-- Datos del DataTable -->
                        <script>
                            $(function () {
                                $("#example1").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Miembros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Miembros",
                                        "infoFiltered": "(Filtrado de MAX total Miembros)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar Menu de Miembros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscador:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                    "responsive": true, "lengthChange": true, "autoWidth": false,
                                    buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy',
                                        }, {
                                            extend: 'pdf'
                                        },{
                                            extend: 'csv'
                                        },{
                                            extend: 'excel'
                                        },{
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }
                                        ]
                                    },
                                        {
                                            extend: 'colvis',
                                            text: 'Visor de columnas',
                                            collectionLayout: 'fixed three-column'
                                        }
                                    ],
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection