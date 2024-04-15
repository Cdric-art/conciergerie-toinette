<x-home-layout>
    <section class="text-center bg-pinkDark">

        <x-title title="CONCIERGERIE TOINETTE" subtitle="Des bras en plus pour gérer votre quotidien" color="wht"/>

        <section class="max-w-[1440px] flex flex-wrap items-center mx-auto">

            @foreach($homePosts as $homePost)
            <div class="flex flex-wrap justify-center items-center my-12 mx-auto">

                @if(empty($homePost->title) && empty($homePost->contentInverse) && !empty($homePost->content))
                <p class="md:text-2xl text-center text-wht p-4 w-full md:mx-40 xl:mx-60">{{ $homePost->content }}</p>
                @endif

                @if(!empty($homePost->title))

                @if(!$homePost->inverseContent)

                <div class="relative">
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                         src="{{ asset('storage/images/' . $homePost->image) }}" alt="image">
                    @if(empty($homePost->content))
                    <h3 class="block absolute bottom-4 left-0 right-0 text-3xl text-pinkDark pt-2">{{ $homePost->title
                        }}</h3>
                    @endif
                </div>
                @if(!empty($homePost->content))
                <div
                    class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    <p class="text-start md:text-2xl">{{ $homePost->content }}</p>
                </div>
                @endif

                @endif

                @if($homePost->inverseContent)

                @if(!empty($homePost->content))
                <div
                    class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    <p class="text-start md:text-2xl">{{ $homePost->content }}</p>
                </div>
                @endif
                <div>
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                         src="{{ asset('storage/images/' . $homePost->image) }}" alt="image">
                    @if(empty($homePost->content))
                    <h3 class="text-4xl text-purple pt-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    @endif
                </div>

                @endif

                @endif

            </div>

            @endforeach

        </section>
    </section>
</x-home-layout>
