@extends('layouts.app')

@section('content')
<div class="flex items-start  md:p-8  lg:p-16 xl:p-16">
    <div class="lg:w-1/2 md:w-2/3">
      <img src="{{ asset('images/aduana_principal.png') }}" alt="Aduanas" class="h-auto w-auto rounded-3xl" />
    </div>
    <div class=" w-1/2 pl-24 md:pl-8 lg:pl-12 xl:pl-24 mt-0">
      <h1 class="font-bold text-color xl:text-5xl lg:text-4xl md:text-3xl xl:mt-6 lg:mt-6 md:mt-6">Conoce mas sobre <br>importacion</h1>
      <p class=" mt-5 text-justify xl:mr-24 lg:mr-8 md:mr-0">
        Descubre los entresijos de la importación aduanera. Desde los procedimientos hasta los desafíos, sumérgete en el mundo de las
        aduanas y amplía tu comprensión sobre cómo funciona el comercio internacional.
      </p>
    </div>
</div>
@endsection
