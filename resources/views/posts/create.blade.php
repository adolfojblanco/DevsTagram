@extends('layouts.app')

@section('title')
    Crea una publicación
@endsection


@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('images.store') }}" id="dropzone"
                class="dropzone card rounded border-dashed border-2 w-full h-80 flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 px-10 card mt-5 md:mt-0">
            @if ($errors->any())
                <div class="text-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.store') }}" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                <div>
                    <label id="title" class="form-label">
                        Titulo:
                    </label>
                    <input type="text" id="title" name="title" placeholder="Titulo de la publicación"
                        value="{{ old('title') }}" class="form-input @error('title') border-red-500 @enderror">
                </div>
                <div>
                    <label id="title" class="form-label">
                        Descripción:
                    </label>
                    <textarea id="title" name="description" type="text" placeholder="Descripción de la públicacion"
                        class="form-input @error('title') border-red-500 @enderror">{{ old('description') }}</textarea>
                </div>
                <div class="mb-5">
                    <input type="hidden" name="image">
                </div>
                <input type="submit" value="Crear Post"
                    class="mt-3 bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection
