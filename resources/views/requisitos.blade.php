@extends('layouts.app')
@section('content')
<div class="xl:mx-16 lg:mx-16 md:mx-8 xl:py-8 lg:py-8 md:py-8">
    <h1 class="font-bold  xl:text-5xl lg:text-4xl md:text-3xl text-center">{{$subcategoria->nombre}}</h1>
    <div class="flex justify-center">
        <i class="{{$subcategoria->icon}} text-5xl mt-8 text-cyan-500"></i>
    </div>

    <div class="xl:mx-24 md:mx-8 xl:my-8 md:my-8">
        <label class="">
            <a href="{{route('categorias')}}" class =" hover:text-cyan-600">Categorías</a> /
            <a href="{{route('category', $categoria->nombre)}}" class =" hover:text-cyan-600">{{$categoria->nombre}}</a> /
            <a href="{{route('subcategory', ['categoria' => $categoria->nombre, 'subcategoria' => $subcategoria->nombre])}}" class =" hover:text-cyan-600">{{$subcategoria->nombre}}</a>
        </label>
        <h2 class="font-bold text-2xl mt-2">Requisitos de importación</h2>
        @foreach($requisitos as $requisito)
            <div class="border rounded-lg shadow-md mt-4 py-5 px-8 cursor-pointer" onclick="toggleVisibility('requisito{{$requisito->id_requisito}}')">
                <h2 class="font-bold text-xl">{{$requisito->requisitos}}</h2>
                <div id="requisito{{$requisito->id_requisito}}" class="hidden mt-2 text-justify mx-8">
                    <div class=my-8>
                        <h3 class="font-bold text-lg mb-4">Restricciones:</h3>
                        <p>{!! nl2br($requisito->restricciones) !!}</p>
                    </div>
                    <div class=my-8>
                        <h3 class="font-bold text-lg my-4">Normativas:</h3>
                        <p>{!! nl2br($requisito->normativas) !!}</p>
                    </div>
                    <div class=my-8>
                        <h3 class="font-bold text-lg my-4">Procedimientos de importación:</h3>
                        <p>{!! nl2br($requisito->procedimientos_importacion) !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function toggleVisibility(elementId) {
        var element = document.getElementById(elementId);
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
        }
    </script>
@endsection

