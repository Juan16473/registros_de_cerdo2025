<!-- resources/views/registro/index.blade.php -->
@extends('layouts.app')

@section('title', 'Listado de Registros')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Registros de Producción</h2>
    <table class="w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-green-200">
                <th class="p-2 border">ID Cerdo</th>
                <th class="p-2 border">Fecha</th>
                <th class="p-2 border">Peso</th>
                <th class="p-2 border">Observaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-2 border">001</td>
                <td class="p-2 border">2025-08-10</td>
                <td class="p-2 border">120 kg</td>
                <td class="p-2 border">Sin novedades</td>
            </tr>
        </tbody>
    </table>
@endsection
