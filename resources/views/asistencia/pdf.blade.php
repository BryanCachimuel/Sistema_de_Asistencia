<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Asistencia</title>
</head>

<body>
    <h1>Reporte de Asistencia</h1>

    <table border="1">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Fecha Asistencia</th>
                <th>Nombres de los Miembros</th>
            </tr>
        </thead>
        <tbody>
            @php $contador_asistencia = 1;  @endphp
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td><?= $contador_asistencia++; ?></td>
                    <td>{{ $asistencia->fecha }}</td>
                    <td>{{ $asistencia->miembro->nombre_apellido }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
