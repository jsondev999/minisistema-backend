<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Devuelve la lista de productos
    public function index()
    {
        return response()->json(Producto::all());
    }
    //Guarda un producto nuevo enviado desde React
    public function store(Request $request)
    {
        $producto = Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio
        ]);
        return response()->json(['exito' => true, 'producto' => $producto]);
    }

}
