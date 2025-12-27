@extends('layouts.app')

@section('title')
    Tu Cuenta
@endsection


@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6-/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12">
                <livewire:like-post />
            </div>
            <div
                class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start  py-10 md:py-10">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->name }}</p>
                <p class="text-grey-800 text-sm mb-3 font-bold">
                    0 <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-grey-800 text-sm mb-3 font-bold">
                    0 <span class="font-normal">Siguiendo</span>
                </p>
                <p class="text-grey-800 text-sm mb-3 font-bold">
                    0 <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>
    <section>
        <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
    </section>
@endsection
