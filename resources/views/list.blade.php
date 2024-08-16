<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Listado de Scuderias</h2>
            <!-- <a href="{{ route('views.create') }}" class="btn btn-verde">Crear Scuderia</a> -->
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre Scuderia</th>
                        <th>Pais de Origen</th>
                        <th>Fecha de Creacion</th>
                        <th>Pagina Web</th>
                        <th>Ultimo GP ganado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scuderias as $scuderia)
                    <tr>
                        <td>{{$scuderia->nombre_scuderia}}</td>
                        <td>{{$scuderia->pais_de_origen}}</td>
                        <td>{{$scuderia->fecha_de_creacion}}</td>
                        <td>{{$scuderia->pagina_web}}</td>
                        <td>{{$scuderia->ultima_gp_ganado}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>