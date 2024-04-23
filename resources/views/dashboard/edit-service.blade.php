<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace admin') }}
        </h2>
    </x-slot>

    <x-sidebar/>

    <div class="relative w-[82vw] left-[240px] top-[16px] mb-8 shadow-md sm:rounded-lg">
        <h2 class="font-semibold text-gray-700 leading-tight p-4">
            Modifier le service
        </h2>

        <form method="POST" action="{{ route('services.update', $service) }}" enctype="multipart/form-data"
              class="flex justify-between items-center max-w-md m-4">
            @csrf
            @method('PUT')
            <div class="min-w-full min-h-[300px] mr-4">
                <div class="mb-5">
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                    <input type="text" id="title" name="title" value="{{ $service->title }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="content" name="content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description...">{{ $service->content }}
                </textarea>
                </div>
                <div class="mb-5">
                    <label for="second_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seconde description</label>
                    <textarea id="second_content" name="second_content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description...">{{ $service->second_content }}
                    </textarea>
                </div>
                <div class="mb-5">
                    <label for="post_scriptum"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Scriptum</label>
                    <input type="text" id="post_scriptum" name="post_scriptum" value="{{ $service->post_scriptum }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>
            <div class="min-w-full min-h-[300px] mr-4">
                <div class="mb-5">
                    <label for="price"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
                    <input type="text" id="price" name="price" value="{{ $service->price }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-8">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Image</label>
                    <img class="w-1/4 p-4" src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->image }}">
                    <input name="image" type="file"
                           class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                           aria-describedby="image">
                </div>
                <button type="submit"
                        class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
