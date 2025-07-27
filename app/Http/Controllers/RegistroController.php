<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    // Muestra una vista simple
    public function index()
    {
        // Comentario: Esta función retorna la vista principal del módulo Registro
        return view('registro.index');
    }
}

