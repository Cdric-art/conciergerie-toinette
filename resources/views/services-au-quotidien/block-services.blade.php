<x-home-layout>
    <section class="text-center bg-wht">

        @foreach($services as $service)

            <h3>{{ $service->title }}</h3>

        @endforeach

    </section>
</x-home-layout>

