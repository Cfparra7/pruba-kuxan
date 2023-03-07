<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller

{
    public function index()
    {
        $productos = producto:: all();

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $producto = producto::create(['id' => $request->id,
            'nombre' => $request->nombre,
            'precio' => $request->precio,


        ]);
        return redirect()->route('productos.index')->with('success', 'Se ha creado correctamente.');
    }
//Cristian parra lo hizo
    public function edit($id)
    {
        $producto = producto::find($id);
        return view('productos.edit', compact('producto'));
    }
//Cristian parra lo hizo
    public function show($id)
    {
        $producto = producto::find($id);
        return view('productos.show', compact('producto'));
    }
    public function destroy($id)
    {
        $producto = producto::find($id)->delete();
        return redirect()->route('productos.index');
    }
}


