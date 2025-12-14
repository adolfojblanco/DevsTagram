@extends('layouts.app')

@section('title')
    Crea una publicación
@endsection


@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('images.store') }}" id="dropzone"
                class="dropzone rounded border-dashed border-2 w-full h-96 flex flex-col justify-center items-center"></form>
        </div>
        <div class="md:w-1/2 px-10 card">
            <form action="{{ route('register') }}" method="POST" novalidate>
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
                    <textarea id="title" name="title" type="text" placeholder="Descripción de la públicacion"
                        class="form-input @error('title') border-red-500 @enderror">{{ old('description') }}</textarea>
                </div>
            </form>
        </div>
    </div>
@endsection
