<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Detalles</h1>
    </x-slot>
    <h1>Titulo "{{ $post->title }}"</h1>
    <p>

    </p>
    <p>
        <b>Contenido: </b>{{ $post->content }}
    </p>
    <p>
        <b>Autor: </b>{{ $user->name }}</b>
    </p>

    <a href="{{ route('category.index') }}">Volver</a>
    @if (Auth::user()->id == $post->iduser)
        <a href="{{ route('category.edit', $post->idpost) }}">Editar</a>
        <form action="{{ route('category.show', $post->idpost) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Eliminar Post</button>
        </form>
    @endif
</x-app-layout>
