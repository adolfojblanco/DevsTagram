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
    <section class="container mx-auto my-10">
        <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div>
                        <a>
                            <img src="{{ asset('uploads') . '/' . $post->image }}"
                                alt="imagen del post {{ $post->title }}">
                        </a>
                    </div>
                @endforeach
            @else
                <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay post</p>
            @endif

        </div>
    </section>
@endsection
