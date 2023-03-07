<?php

namespace App\Http\Controllers;

use Carbon\FactoryImmutable;
use Illuminate\Http\Request;
use App\Models\Factura;


class FacturaController extends Controller
{
    public function index()
    {
        $facturas = factura:: all();

        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        return view('facturas.create');
    }

    public function store(Request $request)
    {
        $factura = factura::create(['id' => $request->id,
            'numero' => $request->numero,
            'fecha' => $request->fecha,
            'total_de_productos' => $request->total_de_productos,
            'precio_total'  => $request-> precio_total,

        ]);
        return redirect()->route('facturas.index')->with('success', 'Se ha creado correctamente.');
    }

    public function edit($id)
    {
        $factura = factura::find($id);
        return view('facturas.edit', compact('factura'));
    }

    public function show($id)
    {
        $factura = factura::find($id);
        return view('facturas.show', compact('factura'));
    }
    public function destroy($id)
    {
        $factura = factura::find($id)->delete();
        return redirect()->route('facturas.index');
    }
}


