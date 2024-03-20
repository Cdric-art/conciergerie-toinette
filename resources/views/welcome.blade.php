@include('header.header')
@include('navbar.navbar')

<section class="text-center bg-white p-8">

    <h1 class="text-8xl text-pinkDark mt-12">CONCIERGERIE TOINETTE</h1>
    <h2 class="text-6xl text-pinkDark mt-3">Sous-Titre</h2>

    <section class="flex flex-wrap items-center gap-8 mt-16 mb-8 mx-auto px-16">

        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="$description" descriptionInverse=""/>
        <x-ContentHome title="$title" description="$description" descriptionInverse="$descriptionInverse"/>
        <x-ContentHome title="$title" description="$description" descriptionInverse=""/>

    </section>
</section>

@include('footer.footer')
