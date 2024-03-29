<x-home-layout>
    <section class="text-center bg-wht">

        <x-title title="SERVICES AU QUOTIDIEN" subtitle="" color="pinkDark"/>

        <section class="max-w-8xl grid justify-center items-center mx-auto md:grid-cols-2 lg:grid-cols-3">
                @foreach($categories as $category)

                <div class="relative max-w-[380px] sm:max-w-[455px] my-8">
                    <a href="">
                        <img class="w-full"
                             src="{{ asset('images/' . $category->image) }}" alt="image">
                    </a>
                    <h3 class="block absolute bottom-0 left-0 right-0 text-3xl text-pinkDark pt-2">{{ $category->title }}</h3>
                </div>

                @endforeach
        </section>

    </section>
</x-home-layout>
