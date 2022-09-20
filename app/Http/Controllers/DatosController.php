<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function create()
    {
     return view('Datos/registro');
    }

    public function guardar(Request $request)
    {
        $dat = new Datos();
        $dat->codigo_barras = $request->codigo_barras;
        $dat->nombre = $request->nombre;
        $dat->precio = $request->precio;
        $dat->descripcion = $request->descripcion;
        $dat->cantidad = $request->cantidad;
        $dat->save();
        return redirect('Datos/list');
    }

    
    
        public function list()
    {
        $datos = Datos::all(); 

        return view ('Datos/list', compact('datos'));
    }

    public function edit($id)
    {
        $dat = Datos::findOrFail($id);
        return view('Datos/edit', compact('dat'));
    }

    public function update(request $request, Datos $dat)
    {
    $dat->codigo_barras = $request->codigo_barras;
    $dat->nombre = $request->nombre;
    $dat->precio = $request->precio;
    $dat->descripcion = $request->descripcion;
    $dat->cantidad = $request->cantidad;

     $dat->save();
     return redirect('Datos/list');
    }

    public function delete($id)
    {
        $dat = Datos::find($id);
        $dat->delete();
        return redirect('Datos/list');

    }
}
