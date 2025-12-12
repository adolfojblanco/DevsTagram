<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevsTagram - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="p-5 border-g bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">DevsTagram</h1>
            @auth
                <nav>
                    <a class="font-bold text-sm text-gray-600" href="">Hola,
                        <span class="font-normal">{{ auth()->user()->name }}</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="font-bold uppercase text-sm text-gray-600 cursor-pointer" type="submit">Cerrar Sesión</button>
                    </form>
                </nav>
            @endauth
            @guest
                <nav>
                    <a class="font-bold uppercase text-sm text-gray-600" href="{{ route('login') }}">Login</a>
                    <a class="font-bold uppercase text-sm text-gray-600" href="{{ route('register') }}">Register</a>
                </nav>
            @endguest
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
        @yield('content')
    </main>
    <footer class="mt-5 text-center text-gray-500 uppercase">
        DevsTagram - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>

</html>
