@extends('layouts.app')

@section('title')
    Regístrate en DevsTagram
@endsection


@section('content')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagne aqui</p>
        </div>
        <div class="md:w-1/2 card">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label id="name" class="form-label">
                        Nombre:
                    </label>
                    <input type="text" id="name" name="name" placeholder="Nombre de usuario"
                        value="{{ old('name') }}" class="form-input">
                </div>
                <div class="pt-2">
                    <label id="email" class="form-label">
                        Email:
                    </label>
                    <input type="email" id="email" value="{{ old('email') }}" name="email"
                        placeholder="Correo Electronico" class="form-input">
                </div>
                <div class="pt-2">
                    <label id="password" class="form-label">
                        Contraseña:
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña" class="form-input">
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="mt-3 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />
                @error('name')
                    <p class="text-alert">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>
@endsection
