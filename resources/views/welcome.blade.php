@include('header.header')
@include('navbar.navbar')

<section class="text-center bg-wht p-8">

    <h1 class="text-8xl text-pinkDark mt-12">CONCIERGERIE TOINETTE</h1>
    <h2 class="text-6xl text-pinkLight mt-3">Sous-Titre</h2>

    <section class="flex flex-wrap items-center gap-8 mt-16 mb-8 mx-auto px-22">

        @foreach($homePosts as $homePost)
            <x-content-home title="{{ $homePost->title }}" description="{{ $homePost->content }}" image="{{ $homePost->image }}" descriptionInverse="{{ $homePost->inverseContent }}"/>
        @endforeach

    </section>
</section>

@include('footer.footer')
