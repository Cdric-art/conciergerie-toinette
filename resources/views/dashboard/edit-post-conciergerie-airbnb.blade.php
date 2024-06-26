<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace admin') }}
        </h2>
    </x-slot>

    <x-sidebar/>

    <div class="relative w-[82vw] left-[240px] top-[16px] mb-8 shadow-md sm:rounded-lg">
        <h2 class="font-semibold text-gray-700 leading-tight p-4">
            {{ __("Modifier le post") }}
        </h2>

        <form method="POST" action="{{ route('conciergerie.update', $post) }}" enctype="multipart/form-data"
              class="flex justify-between items-center max-w-md m-4">
            @csrf
            @method('PUT')
            <div class="min-w-full min-h-[300px] mr-4">
                <div class="mb-5">
                    <label for="slug"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ $post->slug }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="title"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                    <input type="text" id="title" name="title" value="{{ $post->title }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="subtitle"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sous-Titre</label>
                    <input type="text" id="subtitle" name="subtitle" value="{{ $post->subtitle }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="content" name="content" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Description...">
                    {{ $post->content }}
                    </textarea>
                </div>
            </div>
            <div class="flex flex-col justify-start min-w-full min-h-[300px]">
                <div class="mb-8">
                    <label class="mb-5 cursor-pointer">
                        <span class="block mb-2 text-sm font-medium text-gray-900">Afficher dans la navigation ?</span>
                        <input type="checkbox" name="showNavigation" class="sr-only peer" @if($post->showNavigation) checked @endif>
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="mb-8">
                    <label class="mb-5 cursor-pointer">
                        <span class="block mb-2 text-sm font-medium text-gray-900">Image à droite ?</span>
                        <input type="checkbox" name="inverseContent"
                               class="sr-only peer" @if($post->inverseContent) checked @endif>
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="mb-8">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Image</label>
                    <img class="w-1/4 p-4" src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->image }}">
                    <input name="image" type="file"
                           class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                           aria-describedby="image">
                </div>
                <div>
                    <button type="submit"
                            class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
