@extends('layouts.app')

@section('content')

{{-- <div class="xl:mx-64 lg:mx-32 md:mx-16 xl:py-16 lg:py-8 md:py-8">
    <h1 class="font-bold text-color xl:text-5xl lg:text-4xl md:text-3xl">Ponte en contacto</h1>
</div> --}}
<div class="flex items-start  md:p-8  lg:p-16 xl:p-16">
    <div class=" w-1/2 pl-24 md:pl-8 lg:pl-12 xl:pl-24 mt-0">
        <h1 class="font-bold text-color2 xl:text-2xl lg:text-2xl md:text-2xl xl:mt-6 lg:mt-6 md:mt-6">CONTAC US</h1>
        <h1 class="font-bold text-color xl:text-5xl lg:text-3xl md:text-3xl">Ponte en contacto</h1>
        <p class=" mt-5 text-justify xl:mr-24 lg:mr-8 md:mr-0">
            Si necesitas más información, asistencia o tienes alguna consulta, estamos aquí para ayudarte.
            <br>¡Estamos listos para atenderte y resolver tus inquietudes!
        </p>
        <div class="my-8">
            <div class="">
                <i class="fas fa-envelope mr- text-color"></i>
                <span class="text-sm">contacts@CenterAduanero.com</span>
            </div>
        </div>
    </div>
    <div class=" w-1/2 pr-24 md:pr-8 lg:px-12 xl:pr-24 mt-0">
        <div class="bg-text-color3 border rounded-3xl px-8 py-16">
            <form action="{{ route('enviarCorreo') }}" method="POST">
                @csrf
                <div class="">
                    <label for="nombre" class="font-bold text-color">Nombre</label>
                    <input placeholder= "John Carter" type="text" id="nombre" name="nombre" required class="w-full border rounded-3xl py-4 px-3 mt-1">
                </div>
                <div class="mt-6">
                    <label for="correo" class="font-bold text-color">Correo electrónico</label>
                    <input placeholder= "Example@email.com" type="email" id="correo" name="email" required class="w-full border rounded-3xl py-4 px-3 mt-1">
                </div>
                <div class="mt-6">
                    <label for="mensaje " class="font-bold text-color">Mensaje:</label>
                    <textarea placeholder= "Please type your message here..." id="mensaje" name="mensaje" rows="4" required class="w-full border rounded-3xl py-2 px-3 mt-1"></textarea>
                </div>
                <button type="submit" class=" text-xs bg-btn-color1 hover:bg-btn-color1 text-white font-bold mt-4 py-4 px-8 rounded-3xl">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</div>


@endsection
