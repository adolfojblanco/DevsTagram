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
        <form action="">
            <div>
                <label
                    id="name"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre:
                </label>
                <input
                    type="text"
                    id="username"
                    placeholder="Nombre de usuario"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="pt-2">
                <label
                    id="email"
                    class="mb-2 block uppercase text-gray-500 font-bold">
                    Email:
                </label>
                <input
                    type="text"
                    id="email"
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
                    type="text"
                    id="password"
                    placeholder="Tu contraseña"
                    class="border p-3 w-full rounded-lg">
            </div>
            <input
                type="submit"
                value="Crear Cuenta"
                class=" mt-3 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection