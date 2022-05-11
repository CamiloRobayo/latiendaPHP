<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//primera ruta

Route::get( 'hola', function(){
    echo "petro presidente";
});

Route::get('/Home', function () {
    echo "<h1>Hola ficha 2236903</h1>";
});

Route::get('/Arreglo', function() {

    // Arreglo de estudiantes
    $estudiantes = [
        "AN" => 1,
        "KV" => "Kevin",
        "JN" => 1.5,
        "DV" => true,
        "AR" => [
            25,
            "Veinticinco"
        ],
    ];
    
    // Verificar la variable
    
    echo "<hr />";
    echo "<pre>";
    echo "<h1>Antes de eliminar</h1>";
    echo "<br>";
    var_dump($estudiantes);
    echo "<pre>";

    //Eliminar un elemnto de un array

    unset($estudiantes["JN"]);

    echo "<hr />";
    echo "<h1>Después de eliminar</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Agregar un elemento al array

    $estudiantes["CA"] = "Carlos";

    echo "<hr />";
    echo "<h1>Después de agregar un elemento</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Recorrer un arreglo

    // foreach ($estudiantes as $key => $e) {
    //     echo $key;
    //     echo "<hr />";
    //     echo $e;
    //     echo "<hr />";
    // }
});

Route::get('/Paises', function () {

    $paises = [
        "Colombia" => [
            "CAPITAL" => "Bogotá",
            "MONEDA" => "Peso",
            "POBLACION" => 50.88,
            "CIUDADES" => [
                "Medelín",
                "Barranquilla",
                "Cali",
            ]
        ],
        "Francia" => [
            "CAPITAL" => "Paris",
            "MONEDA" => "Euro",
            "POBLACION" => 67.39,
            "CIUDADES" => [
                "Marsella",
                "Lyon",
                "Burdeos",
            ]
        ],
        "Grecia" => [
            "CAPITAL" => "Atenas",
            "MONEDA" => "Euro",
            "POBLACION" => 10.72,
            "CIUDADES" => [
                "Salonica",
                "Patras",
                "La Canea",
            ]
        ],
        "Australia" => [
            "CAPITAL" => "sídney",
            "MONEDA" => "Dolar Autraliano",
            "POBLACION" => 25.69,
            "CIUDADES" => [
                "Gold Coast",
                "Melbourne",
                "Brisbane",
            ]
        ],
        "Argentina" => [
            "CAPITAL" => "Buenos Aires",
            "MONEDA" => "Peso Argentino",
            "POBLACION" => 45.38,
            "CIUDADES" => [
                "Rosario",
                "Santa Fe",
                "Salta",
            ]
        ],
    ];

    // Mostrar vista de paises

    return view('paises')->with('paises', $paises);
});

Route::get('prueba' ,function(){
    return view('productos.create');
} );

/**
 * Rutas REST Producto
 * 
 */
Route::resource('productos', 
         ProductoController::class );