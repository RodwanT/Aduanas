@extends('layouts.app')

@section('content')

<div class="xl:mx-16 lg:mx-16 md:mx-8 xl:py-8 lg:py-8 md:py-8">
    <h1 class="font-bold text-color xl:text-5xl lg:text-4xl md:text-3xl text-center">{{$categoria->nombre}}</h1>


    <div class= "xl:my-16 lg:my-8 md:my-4 xl:mx-32 lg:mx-16 md:mx-4 ">
        <label class="">
            <a href="{{route('categorias')}}" class =" hover:text-cyan-600">Categorias</a> /
            <a href="{{route('category', $categoria->nombre)}}" class =" hover:text-cyan-600">{{$categoria->nombre}}</a>
        </label>
        <div class="grid grid-cols-3 xl:gap-8 md:gap-4 text-center mt-4">
            @foreach ($subcategorias as $subcategoria)
                <div class="xl:p-8 md:p-4 border rounded-lg shadow-md">
                    <i class="{{$subcategoria->icon}} text-4xl my-8"></i>
                    <h5 class="font-bold text-lg mb-2">{{ $subcategoria->nombre }}</h5>
                    <p class="text-gray-700">{{ $subcategoria->description }}</p>
                    <a href="{{route('subcategory', ['categoria' => $categoria->nombre, 'subcategoria' => $subcategoria->nombre])}}" class="mt-4 inline-block px-4 py-2 bg-cyan-500 text-white rounded hover:bg-cyan-600">Requisitos</a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
