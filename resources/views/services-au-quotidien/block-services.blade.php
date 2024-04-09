<x-home-layout>
    <section class="text-center bg-wht">

        @foreach($services as $service)

        <div class="grid lg:grid-cols-2 max-w-6xl mx-auto md:px-8 px-4 pt-20">
            <div class="self-center justify-self-center">
                <img class="h-[395px]" src="{{ asset('images/' . $service->image) }}" alt="{{ $service->image }}">
            </div>
            <div class="lg:self-start lg:justify-self-start lg:text-start text-pinkDark">
                <h2 class="text-6xl py-4">{{ strtoupper($service->title) }}</h2>
                <p class="text-md py-4">{{ $service->content }}</p>
                <span class="block text-sm py-2 pb-4">{{ strtoupper($service->post_scriptum) }}</span>
                <span class="text-xs p-2 mb-4 border border-pinkDark">{{ strtoupper($service->price) }}</span>
                <div class="flex mt-4 text-wht">
                    <a class="flex justify-between items-center text-xs p-2 bg-pinkDark group"
                       href="mailto:nina@conciergerie-toinette.fr">Contacter moi
                        <svg
                            class="text-transparent ml-1 transition w-2 h-2 group-hover:text-wht"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        @endforeach

    </section>
</x-home-layout>

