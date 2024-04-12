<x-home-layout>
    <section class="text-center bg-pinkDark">

        <section class="max-w-[1440px] flex flex-wrap items-center mx-auto">

            @foreach($posts as $post)
            <div class="flex flex-wrap justify-center items-center my-6 mx-auto">

                @if(empty($post->title) && empty($post->contentInverse) && !empty($post->content))
                <p class="md:text-2xl text-center text-wht p-4 w-full md:mx-40 xl:mx-60">{{ $post->content }}</p>
                @endif

                @if(!empty($post->title) && empty($post->subtitle) && empty($post->image))
                <x-title title="{{ $post->title }}" subtitle="" color="wht"/>
                @endif

                @if(!empty($post->title) && !empty($post->subtitle) && !empty($post->image))

                @if(!$post->inverseContent)

                <div>
                    <x-title title="{{ $post->title }}" subtitle="" color="wht"/>
                    <div class="flex flex-wrap md:justify-around items-center">
                        <div class="relative">
                            <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                                 src="{{ asset('images/' . $post->image) }}" alt="image">
                            @if(empty($post->content))
                            <h3 class="block absolute bottom-0 left-0 right-0 text-3xl text-pinkLight pt-2">{{
                                $post->title
                                }}</h3>
                            @endif
                        </div>
                        @if(!empty($post->content))
                        <div
                            class="flex flex-col md:justify-around items-center xl:items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                            <h3 class="text-3xl md:text-6xl pb-2">{{ $post->subtitle }}</h3>
                            <p class="text-center xl:text-start md:text-1xl">{{ $post->content }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                @endif

                @if($post->inverseContent)

                @if(!empty($post->content))
                <div
                    class="flex flex-col md:justify-around items-center xl:items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ $post->title }}</h3>
                    <p class="text-center xl:text-start md:text-1xl">{{ $post->content }}</p>
                </div>
                @endif
                <div>
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                         src="{{ asset('images/' . $post->image) }}" alt="image">
                    @if(empty($post->content))
                    <h3 class="text-4xl text-pinkLight pt-2">{{ $post->title }}</h3>
                    @endif
                </div>

                @endif

                @endif

                @if(!empty($post->title) && empty($post->subtitle) && !empty($post->image))

                @if(!$post->inverseContent)

                <div class="relative">
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px] rounded-md"
                         src="{{ asset('images/' . $post->image) }}" alt="image">
                    @if(empty($post->content))
                    <h3 class="block absolute bottom-[12px] left-0 right-0 text-3xl text-pinkDark px-2">{{ $post->title
                        }}</h3>
                    @endif
                </div>
                @if(!empty($post->content))
                <div
                    class="flex flex-col md:justify-around items-center xl:items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ $post->title }}</h3>
                    <p class="text-center xl:text-start md:text-1xl">{{ $post->content }}</p>
                </div>
                @endif

                @endif

                @if($post->inverseContent)

                @if(!empty($post->content))
                <div
                    class="flex flex-col md:justify-around items-center xl:items-start min-h-[300px] sm:w-[600px] text-wht bg-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ $post->title }}</h3>
                    <p class="text-center xl:text-start md:text-1xl">{{ $post->content }}</p>
                </div>
                @endif
                <div>
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                         src="{{ asset('images/' . $post->image) }}" alt="image">
                    @if(empty($post->content))
                    <h3 class="text-4xl text-pinkLight pt-2">{{ $post->title }}</h3>
                    @endif
                </div>

                @endif

                @endif

            </div>

            @endforeach

        </section>

    </section>
</x-home-layout>
