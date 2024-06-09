<x-app-layout>
  <x-slot name="header">
    <h1>Modificar post {{ $post->id }}</h1>
  </x-slot>
  <div class="w-full bg-white-700 h-full">
    <div class="h-80"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-gray-900 w-full shadow-black rounded p-8 sm:p-12 -mt-72">
            <p class="text-3xl font-bold leading-7 text-center text-white">Mi Post</p>
            <form action="{{route('category.show',$post->idpost) }}" method="post">
                @csrf {{-- Token para evitar suplantacion de datos --}}
                    @method('put')
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Autor</label>
                        <h1
                            class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded">
                            {{ Auth::user()->name }}</h1>
                    </div>

                </div>
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Titulo</label>
                        <input type="text" name="title"
                            class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" value="{{ $post->title }}" />
                    </div>

                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none text-gray-300">Contenido</label>
                        <textarea type="text" name="content"
                            class="h-48 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded">{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button type="submit"
                        class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                        Actualizar Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
   <a href="{{route('category.index')}}">Cancelar</a>
</x-app-layout>
