<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Detalles</h1>
    </x-slot>

    <div class="w-full bg-white-700 h-full">
      <div class="h-80"></div>
      <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
          <div class="bg-gray-900 w-full custom-shadow rounded p-8 sm:p-12 -mt-72">
              <p class="text-3xl font-bold leading-7 text-center text-white">{{ $post->title }}</p>
              <form action="{{ route('category.show', $post->idpost) }}" method="post">
                  @csrf {{-- Token para evitar suplantacion de datos --}}
                  @method('delete')
                  <div class="md:flex items-center mt-12">
                      <div class="w-full md:w-1/2 flex flex-col">
                          <label class="font-semibold leading-none text-gray-300">Autor:</label>
                          <h1
                              class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded">
                              {{ $user->name }}</h1>
                      </div>

                  </div>
                  
                  <div>
                      <div class="w-full flex flex-col mt-8">
                          <label class="font-semibold leading-none text-gray-300">Contenido</label>
                          <textarea type="text" name="content"
                              class="h-80 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded" readonly>{{ $post->content }}</textarea>
                      </div>
                  </div>
                  <div class="flex items-center justify-center w-full">
                    
                    <div class="flex justify-end mt-2">
                      <a href="{{ route('dashboard') }}"
                      class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-pink-500 rounded hover:bg-pink-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none mr-4">
                      Volver</a>
                    </div>
                      @if (Auth::user()->id == $post->iduser)
                     <div class="flex justify-end mt-2">
                      <a href="{{ route('category.edit', $post->idpost) }}"
                      class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none mr-4">
                      Editar</a>
                      </div>
                      <button type="submit"
                          class="mt-11 font-semibold leading-none text-white py-4 px-10 bg-pink-500 rounded hover:bg-pink-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                          Eliminar
                      </button>
                      @endif
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-app-layout>
    

    
        {{-- <a href="{{ route('category.edit', $post->idpost) }}">Editar</a>
        <form action="{{ route('category.show', $post->idpost) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Eliminar Post</button>
        </form>
    @endif
</x-app-layout> --}}
