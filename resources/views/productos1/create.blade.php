@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registrar nuevo producto</h1>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div style="color: red; margin-bottom: 1rem;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 1rem;">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="precio">Precio:</label><br>
                <input type="number" name="precio" id="precio" step="0.01" value="{{ old('precio') }}" required>
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="cantidad">Cantidad:</label><br>
                <input type="number" name="cantidad" id="cantidad" value="{{ old('cantidad') }}" required>
            </div>

            <button type="submit">Guardar producto</button>
        </form>
    </div>
@endsection
