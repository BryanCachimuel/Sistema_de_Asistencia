@extends('layouts.admin')
@section('content')
    
    <div class="content ml-3">
        <h1>Listado de Usuarios</h1>
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
                        <h3 class="card-title"><strong>Usuarios Registrados</strong></h3>
                       <div class="card-tools">
                            <a href="{{url('/usuarios/create')}}" class="btn btn-primary">
                                <i class="bi bi-person-fill-add"></i> Agregar Nuevo Usuarios
                            </a>
                       </div>
                    </div>

                    <div class="card-body" style="display:block;">

                        <table id="usuariostable" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre del Usuario</th>
                                    <th>Correo</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $contador = 0;
                                @endphp
                               @foreach($usuarios as $usuario)
                               <tr>
                                   <td>@php echo $contador += 1 @endphp</td>
                                   <td>{{$usuario->name}}</td>
                                   <td>{{$usuario->email}}</td>
                                   <td>{{$usuario->fecha_ingreso}}</td>
                                   <td style="text-align:center">
                                       <button class="btn btn-success btn-sm" style="border-radius:20px">Activo</button>
                                       <!--{{$usuario->estado}}-->
                                   </td>
                                   <td style="text-align: center">
                                       <div class="btn-group" role="group" aria-label="Basic example">
                                           <a href="{{url('usuarios',$usuario->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                                           <a href="{{route('usuarios.edit',$usuario->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                           <!-- formulario para eliminar un miembro -->
                                           <form action="{{url('usuarios',$usuario->id)}}" method="POST">
                                               @csrf
                                               {{method_field('DELETE')}}
                                               <button type="submit" onclick="return confirm('¿Estas seguro de eliminar este registro?')" class="btn btn-danger">
                                                   <i class="bi bi-trash3-fill"></i>
                                               </button>
                                           </form>
                                       </div>
                                   </td>
                               </tr>
                                @endforeach
                            </tbody>
                          </table>
          
                        
                        <!-- Datos del DataTable -->
                        <script>
                            $(function () {
                                $("#usuariostable").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                        "infoFiltered": "(Filtrado de MAX total Usuarios)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar Menu de Usuarios",
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
                                }).buttons().container().appendTo('#usuariostable_wrapper .col-md-6:eq(0)');
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection