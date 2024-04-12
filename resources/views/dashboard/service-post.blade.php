<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace admin') }}
        </h2>
    </x-slot>

    <x-sidebar/>

    <div class="relative max-w-6xl left-[304px] top-[16px] mb-8 shadow-md sm:rounded-lg">
        <h2 class="font-semibold text-gray-700 leading-tight p-4">
            Services au quotidien - Service de la catégorie : {{ $category->title }}
        </h2>

        <x-flash-message/>

        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data"
              class="flex justify-between items-center max-w-md m-4">
            @csrf
            <div class="min-w-full min-h-[300px] mr-4">
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                <div class="mb-5">
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                    <input type="text" id="title" name="title"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="content" name="content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description...">
                </textarea>
                </div>
                <div class="mb-5">
                    <label for="second_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="second_content" name="second_content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description...">
                    </textarea>
                </div>
                <div class="mb-5">
                    <label for="post_scriptum"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Scriptum</label>
                    <input type="text" id="post_scriptum" name="post_scriptum"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>
            <div class="min-w-full min-h-[300px] mr-4">
                <div class="mb-5">
                    <label for="price"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
                    <input type="text" id="price" name="price"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-8">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Image</label>
                    <input name="image" type="file"
                           class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                           aria-describedby="image">
                </div>
                <div class="mb-8">
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Créer
                    </button>
                </div>
            </div>
        </form>

        <table class="text-xs text-left rtl:text-right text-gray-500">

            <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">
                    Title
                </th>
                <th scope="col" class="px-4 py-3">
                    Description
                </th>
                <th scope="col" class="px-4 py-3">
                    Seconde description
                </th>
                <th scope="col" class="px-4 py-3">
                    Post Scriptum
                </th>
                <th scope="col" class="px-4 py-3">
                    Image
                </th>
                <th scope="col" class="px-4 py-3">
                    Prix
                </th>
                <th scope="col" class="px-4 py-3">
                    Misa à jour le
                </th>
                <th scope="col" class="px-4 py-3">
                    Crée le
                </th>
                <th scope="col" class="px-4 py-3">
                    Action
                </th>
            </tr>

            </thead>
            <tbody>

            @foreach($services as $service)
            <tr class="text-xs odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-b">
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $service->title }}
                </td>
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ Str::of($service->content)->limit(15) }}
                </td>
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ Str::of($service->second_content)->limit(15) }}
                </td>
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ Str::of($service->post_scriptum)->limit(30) }}
                </td>
                <td class="px-4 py-4 w-1/4">
                    <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->image }}">
                </td>
                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $service->price }}
                </td>
                <td class="px-4 py-4">
                    {{ date('d-m-Y', strtotime($service->created_at)) }}
                </td>
                <td class="px-4 py-4">
                    {{ date('d-m-Y', strtotime($service->updated_at)) }}
                </td>
                <td class="px-4 py-4">
                    <a href="{{ route('services.edit', $service) }}">Editer</a>
                    <span>/</span>
                    <form action="{{ route('services.destroy', $service) }}" method="post">
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

