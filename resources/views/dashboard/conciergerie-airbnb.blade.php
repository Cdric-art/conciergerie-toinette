<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace admin') }}
        </h2>
    </x-slot>

    <x-sidebar/>

    <div class="relative max-w-6xl left-[304px] top-[16px] mb-8 shadow-md sm:rounded-lg">
        <h2 class="font-semibold text-gray-700 leading-tight p-4">
            Conciergerie AirBNB
        </h2>

        <x-flash-message />
    </div>

</x-app-layout>
