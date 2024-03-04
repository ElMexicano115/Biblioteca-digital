<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link rel="stylesheet" href="estilos.css">
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
                </div>
            </div><br>
        </div>
        <div class="container bg-primary-subtle border border-black border-5 text-center mt-3">
            <h1>Editor de libros</h1>
            <form action="{{ route('libros.update', ['libro' => $libro->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}">
                </div>
                <div class="mb-3">
                    <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ $libro->fecha_publicacion }}">
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="{{ $libro->editorial }}">
                </div>
                <div class="mb-3">
                    <label for="portada" class="form-label">URL de Portada</label>
                    <input type="text" class="form-control" id="portada" name="portada" value="{{ $libro->portada }}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <br>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>