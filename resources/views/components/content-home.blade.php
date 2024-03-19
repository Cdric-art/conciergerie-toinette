@php use function PHPUnit\Framework\isFalse as isFalseAlias; @endphp
<div class="wrapper">
    @if(!$descriptionInverse)

        <div class="wrapper_img">
            <a href="">
                <img src="https://placehold.co/400x300" alt="image">
            </a>
            @if(empty($description))
                <h3>{{ $title }}</h3>
            @endif
        </div>
        @if(!empty($description))
            <div class="wrapper_text">
                <h3>{{ $title }}</h3>
                <p>{{ $description }}</p>
            </div>
        @endif

    @endif

    @if($descriptionInverse)

        @if(!empty($description))
            <div class="wrapper_text">
                <h3>{{ $title }}</h3>
                <p>{{ $description }}</p>
            </div>
        @endif
        <div class="wrapper_img">
            <a href="">
                <img src="https://placehold.co/400x300" alt="image">
            </a>
            @if(empty($description))
                <h3>{{ $title }}</h3>
            @endif
        </div>

    @endif
</div>
