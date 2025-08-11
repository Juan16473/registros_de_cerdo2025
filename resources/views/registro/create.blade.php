@extends('layouts.app')

@section('title', 'Nuevo Registro')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Registrar Producción</h2>
    <form class="bg-white p-6 rounded shadow space-y-4">
        <input type="text" class="w-full p-2 border rounded" placeholder="ID Cerdo">
        <input type="date" class="w-full p-2 border rounded" placeholder="Fecha">
        <input type="number" class="w-full p-2 border rounded" placeholder="Peso (kg)">
        <textarea class="w-full p-2 border rounded" placeholder="Observaciones"></textarea>
        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded">Guardar</button>
    </form>
@endsection
