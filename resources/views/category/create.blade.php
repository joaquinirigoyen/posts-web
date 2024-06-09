<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Formulario nuevo Post</h1>
    </x-slot>

    <!-- component -->
    <div class="w-full bg-white-700 h-full">
        <div class="h-80"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-gray-900 w-full shadow-2xl shadow-blue-500/50 rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center text-white">Mi Post</p>
                <form action="{{ route('category.store') }}" method="post">
                    @csrf {{-- Token para evitar suplantacion de datos --}}
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
                                class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" />
                        </div>

                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none text-gray-300">Contenido</label>
                            <textarea type="text" name="content"
                                class="h-48 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit"
                            class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                            Crear Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
