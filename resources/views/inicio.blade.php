<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Digital</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container-fluid fondo-nav">
            <br>
            <div class="row text-light">
                <div class="col-1"></div>
                <div class="col-4">
                    <h1><i class="bi bi-book"></i>Biblioteca Digital</h1>
                </div>
                <div class="col-4"></div>
                <div class="col align-self-center">
                    <form action="{{ route('buscar') }}" method="GET" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar libros" name="query" aria-label="Buscar">
                        <button class="btn btn-buscar btn-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div><br>
        </div>
        <div class="row m-2 mt-3">
            <div class="col-2 border border-black border-3 fondo-menu">
                <br>
                <a href="{{ route('inicio.index')}}"><h3><i class="bi bi-arrow-right">Lista de libros</i></h3></a>
                <br>
                <a href="{{ route('administrar')}}"><h3><i class="bi bi-arrow-right">Administrar</i></h3></a>
                <br>
            </div>
            <div id="ancho"></div>
            <div class="col border border-black border-3">
                <div><br>
                    <h3 class="text-center">Listado de libros</h3>
                    <div class=" bg-encabezado" style="max-height: 660px; overflow-y: auto;">
                        <!-- Tabla de libros -->
                        <table class="table">
                            <!-- Encabezados de la tabla -->
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Autor</th>
                                    <th>Fecha de Publicación</th>
                                    <th>Editorial</th>
                                    <th>Portada</th>
                                </tr>
                            </thead>
                            <!-- Cuerpo de la tabla -->
                            <tbody>
                                @foreach($libros as $libro)
                                <tr>
                                    <td>{{ $libro->nombre }}</td>
                                    <td>{{ $libro->autor }}</td>
                                    <td>{{ $libro->fecha_publicacion }}</td>
                                    <td>{{ $libro->editorial }}</td>
                                    <td><img src="{{ asset('storage/'.$libro->portada) }}" alt="Portada" width="100"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>