<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Usuarios</title>
</head>

<body>
    <h1>Reporte de Usuarios</h1>

    <table border="1">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nombre de Usuarios</th>
                <th>Correo de Usuarios</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            @php $contador_usuarios = 1;  @endphp
            @foreach ($usuarios as $usuario)
                <tr>
                    <td><?= $contador_usuarios++; ?></td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->fecha_ingreso }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
