@php use function PHPUnit\Framework\isFalse as isFalseAlias; @endphp
<div class="flex flex-wrap justify-center items-center mt-8 mx-auto">
    @if(!$descriptionInverse)

        <div>
            <a href="">
                <img class="min-h-[300px]" src="https://placehold.co/400x300" alt="image">
            </a>
            @if(empty($description))
                <h3 class="text-4xl text-pinkDark pt-2">{{ $title }}</h3>
            @endif
        </div>
        @if(!empty($description))
            <div class="flex flex-col justify-center items-start min-h-[300px] min-w-[600px] text-white bg-pinkDark px-8 py-4">
                <h3 class="text-4xl pb-2">{{ $title }}</h3>
                <p>{{ $description }}</p>
            </div>
        @endif

    @endif

    @if($descriptionInverse)

        @if(!empty($description))
            <div class="flex flex-col justify-center items-start min-h-[300px] min-w-[600px] text-white bg-pinkDark px-8 py-4">
                <h3 class="text-4xl pb-2">{{ $title }}</h3>
                <p>{{ $description }}</p>
            </div>
        @endif
        <div>
            <a href="">
                <img class="min-h-[300px]" src="https://placehold.co/400x300" alt="image">
            </a>
            @if(empty($description))
                <h3 class="text-4xl text-pinkDark pt-2">{{ $title }}</h3>
            @endif
        </div>

    @endif
</div>
