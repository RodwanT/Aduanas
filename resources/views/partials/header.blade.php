<header>
    <div class="flex items-center justify-between pt-8 px-8 bg-white text-color">

        <div class="flex items-center xl:px-16 lg:px-16 md:px-8 h-auto">
            <a href="/" class="xl:text-5xl lg:text-4xl md:text-4xl">CenterAdunero</a>
        </div>
        <nav id="navLinks" class="flex items-center xl:pr-16 lg:pr-16 md:pr-8">

            <div class="container ">
                <a href="{{ route('index') }}" class="hover:text-gray-400 xl:mx-5 lg:mx-5 md:mx-5">Inicio</a>
            </div>
            <div class="container ">
                <a href="{{ route('aduanas') }}" class="hover:text-gray-400 xl:mx-5 lg:mx-5 md:mx-5">Aduanas</a>
            </div>

            <div class="container ">
                <a href="{{route ('categorias')}}" class="hover:text-gray-400 xl:mx-5 lg:mx-5 md:mx-5">Categorías</a>
            </div>

            <div class="container ">
                <a href="{{route ('contactos')}}" class="hover:text-gray-400 xl:m-5 lg:ml-5 md:ml-5">Contacto</a>
            </div>
        </nav>
        <button class="md:hidden" id="menuButton">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</header>
