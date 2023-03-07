<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\Detalle;

class DetallesController extends Controller

{
    public function index()
    {
        $detalles = Detalle:: all();

        return view('detalles.index', compact('detalles'));
    }

    public function create()
    {
        return view('detalles.create');
    }

    public function store(Request $request)
    {
        $detalles =Detalle::create(['id' => $request->id,

            'factura_id' => $request->factura_id,
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,

//Cristian parra lo hizo
        ]);
        return redirect()->route('detalles.index')->with('success', 'Se ha creado correctamente.');
    }

    public function edit($id)
    {
        $detalle = Detalle::find($id);
        return view('detalles.edit', compact('detalle'));
    }

    public function show($id)
    {
        $detalle = Detalle::find($id);
        return view('detalles.show', compact('detalle'));
    }
    public function destroy($id)
    {
        $detalle = Detalle::find($id)->delete();
        return redirect()->route('detalles.index');
    }

}
