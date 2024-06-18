<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Cursos</title>
</head>

<body>
    <h1>Reporte de Cursos</h1>

    <table border="1">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nombre de Curso</th>
                <!--<th>Descripción</th>-->
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @php $contador_cursos = 1;  @endphp
            @foreach ($cursos as $curso)
                <tr>
                    <td><?= $contador_cursos++; ?></td>
                    <td>{{ $curso->nombre_curso }}</td>
                    <!--<td>{{ $curso->descripcion }}</td>-->
                    <td>{{ $curso->fecha_ingreso }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
