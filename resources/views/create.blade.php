<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @section('titulo', 'Crear Scuderia')
    @section('contenido')
    <h3 class="my-3">Crear una nueva scuderia</h3>
    <div class="card">
        <div class="card-body">
            <form id="formularioScuderia" method="POST" action="{{ route('scuderia.store') }}">
                {{-- seguridad --}}
                @csrf
                <div class="row">
                    {{-- Primer columna del formulario --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre_scuderia" class="form-label">Nombre de la escuderia</label>
                            <input id="nombre_scuderia" type="text" class="form-control" name="nombre_scuderia" required>
                        </div>
                        <div class="mb-3">
                            <label for="pais_de_origen" class="form-label">Pais de Origen</label>
                            <input id="pais_de_origen" type="text" class="form-control" name="identificacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_de_creacion" class="form-label">Fecha de creacion</label>
                            <input id="fecha_de_creacion" type="text" class="form-control" name="fecha_de_creacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="pagina_web" class="form-label">Pagina Web</label>
                            <input id="pagina_web" type="text" class="form-control" name="pagina_web" required>
                        </div>
                        <div class="mb-3">
                            <label for="ultima_gp_ganado" class="form-label">Ultimo GP Ganado</label>
                            <input id="ultima_gp_ganado" type="text" class="form-control" name="ultima_gp_ganado" required>
                        </div>
                    </div>
</body>

</html>