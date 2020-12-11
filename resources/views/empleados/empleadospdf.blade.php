<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div style="max-width: 900%;">
        <div class="date">{{ $date }}</div>
        <h3 align="center">
            REPORTE DE EMPLEADOS
        </h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img class="mediana" src="{{ public_path('storage') . '/' . $empleado->Foto }}"
                                class="img img-thumbnail img-fluid" width="100">
                        </td>
                        <td>{{ $empleado->Nombres }} {{ $empleado->Apellidos }}</td>
                        <td>{{ $empleado->Correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
