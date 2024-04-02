<x-home-layout>
    <section class="text-center bg-wht">

        @foreach($services as $service)

            <div class="grid lg:grid-cols-2 max-w-6xl min-h-[80vh] mx-auto md:px-8 px-4 md:py-24 py-12">
                <div class="self-center justify-self-center">
                    <img class="max-h-[300px] max-w-[360px] sm:max-w-[455px]" src="{{ asset('images/' . $service->image) }}" alt="{{ $service->image }}">
                </div>
                <div class="lg:self-start lg:justify-self-start lg:text-start text-pinkDark">
                    <h2 class="text-6xl py-4">{{ strtoupper($service->title) }}</h2>
                    <p class="text-md py-4">{{ $service->content }}</p>
                    <span class="block text-sm py-2 pb-4">{{ $service->post_scriptum }}</span>
                    <span class="text-xs p-2 border border-pinkDark">{{ strtoupper($service->price) }}</span>
                </div>
            </div>

        @endforeach

    </section>
</x-home-layout>

