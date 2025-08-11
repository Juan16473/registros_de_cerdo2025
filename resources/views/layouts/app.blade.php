<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Registros de Cerdo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-green-700 text-white p-4">
        <h1 class="text-xl font-bold">App Registros de Cerdo</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        Proyecto GA8-220501096 - SENA
    </footer>
</body>
</html>
