@extends('layouts.app')

@section('title')
Regístrate en DevsTagram
@endsection


@section('content')
<div class="md:flex">
    <div class="md:w-1/2">
        <p>Imagne aqui</p>
    </div>
    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div>
                <label
                    id="name"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre:
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Nombre de usuario"
                    value="{{old('name')}}"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="pt-2">
                <label
                    id="email"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                    Email:
                </label>
                <input
                    type="email"
                    id="email"
                    value="{{old('email')}}"
                    name="email"
                    placeholder="Correo Electronico"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="pt-2">
                <label
                    id="password"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña:
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Tu contraseña"
                    class="border p-3 w-full rounded-lg">
            </div>
            <input
                type="submit"
                value="Crear Cuenta"
                class=" mt-3 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
                @error('name')
                <p class="text-alert">{{$message}}</p>
                @enderror
        </form>
    </div>
</div>
@endsection
