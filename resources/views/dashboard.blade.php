@extends('layouts.app')

@section('title')
    Tu Cuenta
@endsection


@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6-/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12">
                <p>Imagen Aqui</p>
            </div>
            <div class="md:w-8/12 lg:w-6/12">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
@endsection
