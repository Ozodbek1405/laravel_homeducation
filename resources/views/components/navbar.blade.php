<nav class="bg-white shadow-lg w-full fixed bg-white top-0 z-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="/" class="flex items-center py-4 px-2">
                        <img src="/storage/{!!str_replace("\\","/",setting('site.logo'))!!}" alt="Logo" class="h-12 w-32">
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="{{route('home.category')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg"
                       >@lang('lang.category')
                    </a>
                    <a href="{{route('create.name')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg"
                       >@lang('lang.ariza_qoldirish')
                    </a>
                    <a href="{{route('home.about_us')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg"
                       >@lang('lang.about_me')
                    </a>
                    <a href="{{setting('site.admin_telegram_link')}}" class="nav p-2 text-white font-semibold transition duration-300
                       rounded-lg" >@lang('lang.admin')
                    </a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden lg:flex items-center justify-center">
                <a href="{{setting('site.site_telegram_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                    <i class="fab fa-telegram"></i>
                </a>
                <a href="{{setting('site.site_instagram_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="{{setting('site.site_facebook_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{setting('site.site_gmail_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                    <i class="fab fa-google"></i>
                </a>
            </div>
            <div class="flex items-center justify-center">
                @if (session('lang') == 'ru')
                    <a href="{{route('lang', ['lang'=>'uz'])}}" class="hover:text-gray-500 mr-2">
                        UZ
                    </a>
                    I
                    <a href="{{route('lang', ['lang'=>'ru'])}}" class="text-red-500 hover:text-red-500 ml-2">
                        RU
                    </a>
                @else
                    <a href="{{route('lang', ['lang'=>'uz'])}}" class="text-red-500 hover:text-red-500 mr-2">
                        UZ
                    </a>
                    I
                    <a href="{{route('lang', ['lang'=>'ru'])}}" class="hover:text-gray-500 ml-2">
                        RU
                    </a>
                @endif
            </div>
            <!-- Mobile menu button -->
            <div class="lg:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-blue-500"
                         x-show="!showMenu" fill="none" stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="py-4 ml-8">
            <li class="active"> <a href="{{route('home.category')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg">@lang('lang.category')</a></li>
            <li class="my-6">  <a href="{{route('create.name')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg">@lang('lang.ariza_qoldirish')</a></li>
            <li class="pb-6"><a href="{{route('home.about_us')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg">@lang('lang.about_me')</a></li>
            <li class="pb-4"><a href="{{setting('site.admin_telegram_link')}}" class="nav p-2 text-white font-semibold transition duration-300 rounded-lg">@lang('lang.admin')</a></li>
        </ul>
        <div class="items-center justify-center m-8">
            <a href="{{setting('site.site_telegram_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                <i class="fab fa-telegram"></i>
            </a>
            <a href="{{setting('site.site_instagram_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="{{setting('site.site_facebook_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{setting('site.site_gmail_link')}}" class="mr-6 text-blue-900 hover:text-red-600">
                <i class="fab fa-google"></i>
            </a>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
