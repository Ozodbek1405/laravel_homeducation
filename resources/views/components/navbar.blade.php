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
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/categories" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Kategoriyalar</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Biz haqimizda</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Ariza qoldirish</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center justify-center">
                <a href="#!" class="mr-6 text-gray-600">
                    <i class="fab fa-facebook-f hover:text-yellow-500"></i>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <i class="fab fa-telegram text-blue-500 hover:text-yellow-500"></i>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <i class="fab fa-google text-green-500 hover:text-yellow-500"></i>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <i class="fab fa-instagram text-red-500 hover:text-yellow-500"></i>
                </a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                         x-show="!showMenu"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="py-4 ml-8">
            <li class="active"> <a href="/categories" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Kategoriyalar</a></li>
            <li class="my-6"> <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Biz haqimizda</a></li>
            <li class="pb-4"><a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Ariza qoldirish</a></li>
        </ul>
        <div class="items-center justify-center m-8">
            <a href="#!" class="mr-6 text-gray-600">
                <i class="fab fa-facebook-f hover:text-yellow-500"></i>
            </a>
            <a href="#!" class="mr-6 text-gray-600">
                <i class="fab fa-telegram hover:text-yellow-500"></i>
            </a>
            <a href="#!" class="mr-6 text-gray-600">
                <i class="fab fa-google hover:text-yellow-500"></i>
            </a>
            <a href="#!" class="mr-6 text-gray-600">
                <i class="fab fa-instagram hover:text-yellow-500"></i>
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
