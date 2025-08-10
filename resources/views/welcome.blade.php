@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de productos para la granja porcina</h1>

        @if ($productos->isEmpty())
            <p>No hay productos registrados aún.</p>
        @else
            <ul>
                @foreach($productos as $producto)
                    <li>
                        <strong>{{ $producto->nombre }}</strong><br>
                        Tipo: {{ $producto->tipo }}<br>
                        Precio: ${{ number_format($producto->precio, 2) }}<br>
                        Cantidad disponible: {{ $producto->cantidad }}<br>
                        Descripción: {{ $producto->descripcion }}
                    </li>
                    <hr>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
