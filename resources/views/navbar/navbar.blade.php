<nav class="bg-wht">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo/logo.png') }}" class="h-[6rem]" alt="Conciergerie Toinette Logo"/>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-pinkDark hover:text-wht hover:bg-purple md:hidden"
                aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('servicesquotidien') }}" id="dropdownHoverButton"
                       data-dropdown-toggle="dropdownHoverServices" data-dropdown-trigger="hover"
                       class="block py-2 px-3 text-pinkDark bg-wht border border-pinkDark hover:text-wht hover:border-transparent hover:bg-purple"
                       type="button">
                       Services au quotidien
                    </a>
                       
                    <div id="dropdownHoverServices"
                         class="hidden z-10 bg-white divide-y divide-gray-100 text-sm w-11/12 md:w-40">
                        <ul class="text-wht bg-purple hidden md:block" aria-labelledby="dropdownHoverButton">
                            @foreach($categories as $category)
                            <li class="group flex justify-between items-center pr-4 hover:bg-wht hover:text-pinkDark">
                                <a href="{{ route('servicesquotidien-category', $category->id) }}"
                                   class="block px-4 py-2">{{ $category->title }}</a>
                                <svg class="transition w-2 h-2 text-transparent group-hover:text-pinkDark"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"></path>
                                </svg>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('conciergerie_airbnb') }}" id="dropdownHoverButton"
                    data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                       class="block py-2 px-3 text-pinkDark bg-wht border border-pinkDark hover:text-wht hover:border-transparent hover:bg-purple"
                       type="button">
                        Conciergerie Airbnb
                    </a>
                    <div id="dropdownHover"
                         class="z-10 hidden bg-white divide-y divide-gray-100 text-sm w-11/12 md:w-40">
                        <ul class="text-wht bg-purple w-full hidden md:block" aria-labelledby="dropdownHoverButton">
                            @foreach($posts_conciergerie_airbnb as $post)
                            @if($post->showNavigation)
                            <li class="group flex justify-between items-center pr-4 hover:bg-wht hover:text-pinkDark">
                                <a href="{{ route('conciergerie_airbnb.post', $post) }}" class="block px-4 py-2">{{
                                    $post->slug }}</a>
                                <svg class="transition w-2 h-2 text-transparent group-hover:text-pinkDark"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"></path>
                                </svg>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('a-propos') }}"
                       class="block py-2 px-3 text-pinkDark bg-wht border border-pinkDark hover:text-wht hover:border-transparent hover:bg-purple"
                       type="button">
                        À propos
                    </a>
                </li>

            </ul>
        </div>
        <div class="w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col text-pinkDark text-center p-4">
                <li>
                    nina@conciergerie-toinette.fr
                </li>
                <li>
                    06 83 98 25 59
                </li>
            </ul>
        </div>
    </div>
</nav>
