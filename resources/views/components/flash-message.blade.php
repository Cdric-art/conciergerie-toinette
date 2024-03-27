@if(session('success'))

    <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
        <p class="font-bold">Succès</p>
        <p class="text-sm">{{ session('success') }}</p>
    </div>

@endif
