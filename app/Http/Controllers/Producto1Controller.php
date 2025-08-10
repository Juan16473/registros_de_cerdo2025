<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class Producto1Controller extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('welcome', compact('productos'));
    }

    public function create()
    {
        // Aquí puedes retornar una vista para crear productos
        return view('productos1.create');
    }

    public function store(Request $request)
    {
        // Aquí puedes guardar el producto en la base de datos
        // Ejemplo:
        // Producto::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto1 $producto1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto1 $producto1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto1 $producto1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto1 $producto1)
    {
        //
    }
}
