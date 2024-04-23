<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace admin') }}
        </h2>
    </x-slot>

    <x-sidebar/>

    <div class="relative w-[82vw] left-[240px] top-[16px] mb-8 shadow-md sm:rounded-lg">
        <h2 class="font-semibold text-gray-700 leading-tight p-4">
            Conciergerie AirBNB
        </h2>

        <x-flash-message/>

        <form method="POST" action="{{ route('conciergerie.store') }}" enctype="multipart/form-data"
              class="flex justify-between items-center max-w-md m-4">
            @csrf
            <div class="min-w-full min-h-[300px] mr-8">
                <div class="mb-5">
                    <label for="slug"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                    <input type="text" id="title" name="title"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="subtitle"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sous-Titre</label>
                    <input type="text" id="subtitle" name="subtitle"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="content"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="content" name="content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description..."></textarea>
                </div>
            </div>
            <div class="flex flex-col justify-start min-w-full min-h-[300px]">
                <div class="mb-8">
                    <label class="mb-5 cursor-pointer">
                        <span class="block mb-2 text-sm font-medium text-gray-900">Afficher dans la navigation ?</span>
                        <input type="checkbox" name="showNavigation" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="mb-8">
                    <label class="mb-5 cursor-pointer">
                        <span class="block mb-2 text-sm font-medium text-gray-900">Image à droite ?</span>
                        <input type="checkbox" name="inverseContent" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="mb-8">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Image</label>
                    <input name="image" type="file"
                           class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                           aria-describedby="image">
                </div>
                <div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Créer
                    </button>
                </div>
            </div>
        </form>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">
                    /Slug
                </th>
                <th scope="col" class="px-4 py-3">
                    Titre
                </th>
                <th scope="col" class="px-4 py-3">
                    Sous-Titre
                </th>
                <th scope="col" class="px-4 py-3">
                    Description
                </th>
                <th scope="col" class="px-4 py-3">
                    Image
                </th>
                <th scope="col" class="px-4 py-3">
                    Position de l'image à droite
                </th>
                <th scope="col" class="px-4 py-3">
                    Navigation
                </th>
                <th scope="col" class="px-4 py-3">
                    Crée le
                </th>
                <th scope="col" class="px-4 py-3">
                    Mise à jour le
                </th>
                <th scope="col" class="px-4 py-3">
                    Action
                </th>
            </tr>

            </thead>
            <tbody>

            @foreach($posts_conciergerie_airbnb as $post)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-b">
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $post->slug }}
                </td>
                <td class="px-4 py-4">
                    {{ $post->title }}
                </td>
                <td class="px-4 py-4">
                    {{ $post->subtitle }}
                </td>
                <td class="px-4 py-4">
                    {{ \Illuminate\Support\Str::of($post->content)->limit(100) }}
                </td>
                <td class="px-4 py-4">
                    <img class="w-1/4" src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->image }}">
                </td>
                <td class="px-4 py-4">
                    @if($post->inverseContent)
                    Oui
                    @else
                    Non
                    @endif
                </td>
                <td class="px-4 py-4">
                    @if($post->showNavigation)
                    Oui
                    @else
                    Non
                    @endif
                </td>
                <td class="px-4 py-4">
                    {{ date('d-m-Y', strtotime($post->created_at)) }}
                </td>
                <td class="px-4 py-4">
                    {{ date('d-m-Y', strtotime($post->updated_at)) }}
                </td>
                <td class="px-4 py-4">
                    <a href="{{ route('conciergerie.edit', $post) }}">Editer</a>
                    <span>/</span>
                    <form action="{{ route('conciergerie.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-red-600" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</x-app-layout>
