@extends('layouts.app')

@section('title')
    Ingresa en DevsTagram
@endsection


@section('content')
    <div class="flex mx-auto">
        <div class="mx-auto md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="text-alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('mensaje'))
                    <p class="text-alert">{{ session('mensaje') }}</p>
                @endif
                <div class="pt-2">
                    <label id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email:
                    </label>
                    <input type="email" id="email" value="{{ old('email') }}" name="email"
                        placeholder="Correo Electronico" class="border p-3 w-full rounded-lg">
                </div>
                <div class="pt-2">
                    <label id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña:
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña"
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5 mt-2">
                    <input type="checkbox" name="remember"> <label>Mantener Sesión</label>
                </div>
                <input type="submit" value="Inicia Sesión"
                    class=" mt-3 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
