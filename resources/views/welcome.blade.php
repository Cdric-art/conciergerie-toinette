<x-home-layout>
    <section class="text-center bg-wht">

        <x-title title="CONCIERGERIE TOINETTE" subtitle="Des bras en plus pour gérer votre quotidien" color="pinkDark"/>

        <h2 class="text-xl pb-4 text-pinkDark">Zone d’intervention : Puteaux – Suresnes</h2>

        <section>
            <div class="flex flex-wrap justify-center lg:justify-start items-center mt-16">
                <div>
                    <img class="w-[380px] sm:w-[455px]" 
                    src="{{ asset('assets/home_img_gauche.png') }}" alt="home-image-left">
                </div> 
                <div class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-pinkDark px-8 py-4 lg:ml-16">
                    <h3 class="text-3xl md:text-6xl pb-4">Services au quotidien</h3>
                    <p class="text-start md:text-2xl pb-8">Vous manquez de temps pour accomplir toutes vos tâches au qutodien ?
                        La Conciergerie Toinette prend le relai !</p>
                    <a href="{{ route('servicesquotidien') }}"
                       class="group flex justify-center items-center transition py-2 px-3 text-pinkDark bg-wht border border-pinkDark hover:text-wht hover:border-transparent hover:bg-purple"
                       type="button">
                        En savoir plus
                       <svg class="transition block group-hover:ml-2 w-2 h-2 text-transparent group-hover:text-wht"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"></path>
                        </svg>  
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap justify-center lg:justify-end items-center my-16">
                <div class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-pinkDark px-8 py-4 lg:mr-24">
                    <h3 class="text-3xl md:text-6xl pb-4">Conciergerie Airbnb</h3>
                    <p class="text-start md:text-2xl pb-8">Vous souhaitez vous lancer dans la location courte durée sur Airbnb ?
                        La Conciergerie Toinette vous accompagne de A à Z !</p>
                    <a href="{{ route('conciergerie_airbnb') }}"
                       class="group flex justify-center items-center transition py-2 px-3 text-pinkDark bg-wht border border-pinkDark hover:text-wht hover:border-transparent hover:bg-purple"
                       type="button">
                        En savoir plus
                       <svg class="transition block group-hover:ml-2 w-2 h-2 text-transparent group-hover:text-wht"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"></path>
                        </svg>  
                    </a>
                </div> 
                <div>
                    <img class="w-[380px] sm:w-[455px]" 
                    src="{{ asset('assets/home_img_droite.png') }}" alt="home-image-left">
                </div>
            </div>
            <div class="text-start my-16 max-w-[80vw] ml-auto text-pinkDark pb-4">
                <h3 class="text-3xl md:text-6xl pb-4">Contact</h3>
                <p class="md:text-2xl">nina@conciergerie-toinette.fr</p>
                <p class="md:text-2xl">06 83 98 25 59</p>
            </div>
        </section>

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
                    class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    <p class="text-start md:text-2xl">{{ $homePost->content }}</p>
                </div>
                @endif

                @endif

                @if($homePost->inverseContent)

                @if(!empty($homePost->content))
                <div
                    class="flex flex-col justify-center items-start min-h-[300px] sm:w-[600px] text-pinkDark px-8 py-4">
                    <h3 class="text-3xl md:text-6xl pb-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    <p class="text-start md:text-2xl">{{ $homePost->content }}</p>
                </div>
                @endif
                <div>
                    <img class="max-h-[300px] max-w-[380px] sm:max-w-[455px]"
                         src="{{ asset('storage/images/' . $homePost->image) }}" alt="image">
                    @if(empty($homePost->content))
                    <h3 class="text-4xl text-pinkDark pt-2">{{ mb_strtoupper($homePost->title) }}</h3>
                    @endif
                </div>

                @endif

                @endif

            </div>

            @endforeach

        </section>
    </section>
</x-home-layout>
