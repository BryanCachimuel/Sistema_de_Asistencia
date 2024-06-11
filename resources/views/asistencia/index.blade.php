@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Listado de Asistencia
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asistencias.create') }}" class="btn btn-primary"  data-placement="left">
                                    <i class="bi bi-plus-circle"></i> Nueva Asistencia
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table id="asistenciatable" class="table table-bordered table-striped table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>    
									    <th >Fecha Asistencia</th>
									    <th >Nombres de los Miembros</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asistencias as $asistencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $asistencia->fecha }}</td>
										<td >{{ $asistencia->miembro->nombre_apellido }}</td>

                                            <td>
                                                <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asistencias.show', $asistencia->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asistencias.edit', $asistencia->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                             <!-- Datos del DataTable -->
                        <script>
                            $(function () {
                                $("#asistenciatable").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Asistencias",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Asistencias",
                                        "infoFiltered": "(Filtrado de MAX total Asistencias)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar Menu de Asistencia",
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
                                }).buttons().container().appendTo('#asistenciatable_wrapper .col-md-6:eq(0)');
                            });
                        </script>

                        </div>
                    </div>
                </div>
                {!! $asistencias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
