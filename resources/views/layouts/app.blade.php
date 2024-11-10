<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>DevsTagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- integrar vite para llamar tailwindcss --}}
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        {{-- cabecera --}}
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    DevsTagram
                </h1>
                <nav class="flex gap-2 items-center">
                    <a href="/" class="font-bold uppercase text-gray-600 text-sm hover:text-black">Login</a>
                    <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600 text-sm hover:text-black">Crear Cuenta</a>
                </nav>
            </div>
        </header>
        {{-- main principal --}}
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        {{-- footer --}}
        <footer class="text-center p-5 text-gray-500 font-bold mt-10">
            DevsTagram - Todos los derechos reservados {{ now()->year}}
        </footer>
    </body>
</html>
