@extends('layouts.app')

@section('content')

<div class="xl:mx-64 lg:mx-32 md:mx-16 xl:py-16 lg:py-8 md:py-8">
    <h1 class="font-bold text-color xl:text-5xl lg:text-4xl md:text-3xl">Mexico</h1>
    <p class=" my-5 text-justify">
        Descubre los entresijos de la importación aduanera. Desde los procedimientos hasta los desafíos, sumérgete en el mundo de las
        aduanas y amplía tu comprensión sobre cómo funciona el comercio internacional.
      </p>
    <img src="{{ asset('images/aduanas_mexico.png') }}" alt="Aduanas" class="h-auto w-auto rounded-3xl" />
</div>

@endsection
