<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Miembros</title>
</head>

<body>
    <h1>Reporte de Miembros</h1>

    <table border="1">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nombre de Miembro</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de Nacimiento</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            @php $contador_miembros = 1;  @endphp
            @foreach ($miembros as $miembro)
                <tr>
                    <td><?= $contador_miembros++; ?></td>
                    <td>{{ $miembro->nombre_apellido }}</td>
                    <td>{{ $miembro->telefono }}</td>
                    <td>{{ $miembro->email }}</td>
                    <td>{{ $miembro->fecha_nacimiento }}</td>
                    <td>{{ $miembro->genero }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
