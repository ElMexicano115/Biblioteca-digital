<?php

namespace App\Http\Controllers;
use App\Models\libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibroController extends Controller
{
    //

    public function index()
    {
        $libros = libros::all();
        return view('inicio', compact('libros'));
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $libros = libros::where('nombre', 'LIKE', "%$query%")
                        ->orWhere('autor', 'LIKE', "%$query%")
                        ->get();
        return view('inicio', compact('libros'));
    }

    public function show()
    {
        $libros = libros::all();
        return view('administrar', compact('libros'));
    }

    public function store(Request $request)
    {
        // Validate the request data, including the file upload
        $request->validate([
            'nombre' => 'required',
            'autor' => 'required',
            'fecha_publicacion' => 'required|date',
            'editorial' => 'required',
            'portada' => 'required|image', // Ensure portada is an image file
        ]);
        
        // Crea un nuevo libro con los datos del formulario
        $libro = new libros();

        // Retrieve the uploaded file
        $portadaPath = $request->file('portada')->store('public/uploads');

        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->editorial = $request->editorial;
        $libro->portada = $portadaPath; // Store the file path, not the file itself
        Storage::disk('local')->put('/public'.$libro->portada , $libro->portada);
        $libro->save();

        // Redirecciona al usuario de vuelta al formulario de creación con un mensaje de éxito
        return redirect()->route('administrar')->with('success', 'Libro creado exitosamente.');
    }

    public function create()
    {
        return view('create');
    }

    public function editar($id)
    {
        $libro = libros::findOrFail($id); 
        return view('edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $libro = libros::findOrFail($id);

        $libro->nombre = $request->input('nombre');
        $libro->autor = $request->input('autor');
        $libro->fecha_publicacion = $request->input('fecha_publicacion');
        $libro->editorial = $request->input('editorial');
        $libro->portada = $request->input('portada');

        $libro->save();

        return redirect()->route('administrar')->with('success', 'Libro actualizado exitosamente.');
    }

    public function borrar($id)
    {
        
        // Encuentra el libro por su ID
        $libro = libros::findOrFail($id);

        // Borra el libro
        $libro->delete();

        // Redirige de vuelta con un mensaje
        return redirect()->route('administrar')->with('success', 'Libro eliminado exitosamente.');
    }
}