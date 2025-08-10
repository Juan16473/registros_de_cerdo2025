<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('settings.profile');
    }

    public function update(Request $request)
    {
        // Aquí puedes agregar la lógica de actualización del perfil
        return redirect()->route('settings.profile')->with('status', 'Perfil actualizado correctamente');
    }
}
