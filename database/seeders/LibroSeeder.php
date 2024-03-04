<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\libros; // Importar el modelo Libro

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        libros::create([
            'nombre' => 'Asi habló Zaratustra',
            'autor' => 'Friedrich Nietzche',
            'fecha_publicacion' => '1983-02-13',
            'editorial' => 'e-artnow sro',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'fecha_publicacion' => '1967-05-30',
            'editorial' => 'Editorial Sudamericana',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'El retrato de Dorian Gray',
            'autor' => 'Oscar Wilde',
            'fecha_publicacion' => '1890-07-20',
            'editorial' => 'Lippincott’s Monthly Magazine',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'Elogio de la locura (Encomium moriae)',
            'autor' => 'Erasmo de Rotterdam',
            'fecha_publicacion' => '1511-01-01',
            'editorial' => 'Desconocida',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'La divina comedia',
            'autor' => 'Dante Alighieri',
            'fecha_publicacion' => '1320-01-01',
            'editorial' => 'Desconocida',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'El gran Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'fecha_publicacion' => '1925-04-10',
            'editorial' => 'Charles Scribner’s Sons',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'Coraline',
            'autor' => 'Neil Gaiman',
            'fecha_publicacion' => '2002-08-04',
            'editorial' => 'HarperCollins',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'El gato negro',
            'autor' => 'Edgar Allan Poe',
            'fecha_publicacion' => '1843-08-19',
            'editorial' => 'The Saturday Evening Post',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'La metamorfosis',
            'autor' => 'Franz Kafka',
            'fecha_publicacion' => '1915-10-15',
            'editorial' => 'Kurt Wolff Verlag',
            'portada' => 'url_de_la_portada.jpg'
        ]);

        libros::create([
            'nombre' => 'La Rata con Thinner',
            'autor' => 'Varios',
            'fecha_publicacion' => '2019-12-16',
            'editorial' => 'Charles Flowers',
            'portada' => 'url_de_la_portada.jpg'
        ]);

    }
}