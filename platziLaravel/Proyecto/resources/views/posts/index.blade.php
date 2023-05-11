<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <a href="{{ route('posts.create') }}" class="text-xs bg-indigo-500 text-black rounded px-4 py-2 ">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Listado de publicaciones</h3>
                    <table class="mb-4">
                        @forelse ($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4" id="">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"></form>
                                    @csrf {{-- 
                                        *La función @csfr de Laravel genera automáticamente el token CSRF de Laravel para cada sesión de usuario activa.
                                        *Este token ayuda a verificar que la solicitud y la aprobación de la aplicación solo se otorgan al usuario autenticado
                                        --}}
                                    @method('DELETE')

                                    <input type="submit" 
                                            value="Eliminar" 
                                            class="bg-stone-50 text-red-600 hover:text-red-900"
                                            onclick="return confirm('Desea eliminar la publicación?')"></input>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200 text-sm">
                                Upps! no hay ninguna publicacion disponible
                            </tr>
                        @endforelse
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
