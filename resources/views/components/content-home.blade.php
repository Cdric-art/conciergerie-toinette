<div class="flex flex-wrap justify-center items-center mt-8 mx-auto">

    @if(empty($title) && empty($descriptionInverse) && !empty($description))
        <h3 class="text-2xl text-center text-pinkLight w-full mx-60">{{ $description }}</h3>
    @endif

    @if(!empty($title))

            @if(!$descriptionInverse)

                <div>
                    <a href="">
                        <img class="max-h-[300px]" src="{{ asset('images/' . $image) }}" alt="image">
                    </a>
                    @if(empty($description))
                        <h3 class="text-4xl text-pinkLight pt-2">{{ $title }}</h3>
                    @endif
                </div>
                @if(!empty($description))
                    <div class="flex flex-col justify-center items-start min-h-[300px] w-[600px] text-wht bg-pinkDark px-8 py-4">
                        <h3 class="text-4xl pb-2">{{ $title }}</h3>
                        <p class="text-start">{{ $description }}</p>
                    </div>
                @endif

            @endif

            @if($descriptionInverse)

                @if(!empty($description))
                    <div class="flex flex-col justify-center items-start min-h-[300px] w-[600px] text-wht bg-pinkDark px-8 py-4">
                        <h3 class="text-4xl pb-2">{{ $title }}</h3>
                        <p class="text-start">{{ $description }}</p>
                    </div>
                @endif
                <div>
                    <a href="">
                        <img class="max-h-[300px]" src="{{ asset('images/' . $image) }}" alt="image">
                    </a>
                    @if(empty($description))
                        <h3 class="text-4xl text-pinkLight pt-2">{{ $title }}</h3>
                    @endif
                </div>

            @endif

    @endif

</div>
