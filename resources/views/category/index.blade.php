<x-app-layout>
    {{-- <x-slot name="header">

        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Listado posts</h1>


    </x-slot> --}}
    <!-- component -->
    <div class="py-1">
        <div class="flex justify-center items-center">
            <div class="container p-3">
                <div class="mx-auto max-w-4xl sm:text-center">
                    <img src="assets/images/landing/index-21.png" class="w-40 mx-auto" alt="">
                    <h2 class="md:text-5xl text-3xl font-semibold tracking-tight">Tu Espacio para Postear y Aprender</h2>
                    <div class="flex justify-center">
                        <p class="md:w-1/2 mt-6 text-xl/8 font-medium text-gray-700 dark:text-gray-600">Un lugar donde tus palabras tienen poder. Publica tus pensamientos, lee los de otros. Únete a nuestra red de conocimiento y creatividad.</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mt-10">
                    @php
                    $colors = [
                    'bg-red-600',
                    'bg-green-600',
                    'bg-blue-600',
                    'bg-yellow-600',
                    'bg-purple-600',
                    'bg-pink-600',
                    'bg-teal-600',
                    'bg-indigo-600',
                    'bg-teal-600',
                    'bg-sky-600',

                    ];
                    @endphp
                    @foreach ($posts as $index => $post)
                    <div>

                        <div class="p-7 rounded-xl {{ $colors[$index % count($colors)] }} shadow-lg  h-64 flex flex-col justify-between overflow-hidden">
                            <div class="flex-grow overflow-hidden">
                                <h3 class="text-xl font-semibold mb-7 text-center ">{{ $post->title }}</h3>
                                <p class="font-medium leading-7 text-white mb-6 overflow-hidden text-ellipsis">
                                    {{ $post->content }}
                                </p>
                            </div>
                            <a href="{{ route('category.show', $post->idpost) }}" class="py-1 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-300 dark:hover:bg-purple-500 dark:hover:text-white ">Ver

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                    <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="flex justify-center items-center pt-10">

            {{ $posts->links() }} {{-- Paginación --}}

            @empty($post)
            <p class="md:text-5xl text-3xl font-semibold tracking-tight">No hay posts de tu autoria</p>
            @endempty
        </div>
    </div>


    <!-- component -->

</x-app-layout>