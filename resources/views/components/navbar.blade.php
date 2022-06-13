<nav class="bg-white shadow-lg w-full fixed bg-white top-0 z-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1vg1F6D8S-eRQidsImQb6SxF3QGXLTj98Vg&usqp=CAU" alt="Logo" class="h-8 w-8 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">Navigation</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Kategoriyalar</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Biz haqimizda</a>
                    <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Ariza qoldirish</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
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
        <ul class="py-4">
            <li class="active"> <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Kategoriyalar</a></li>
            <li class="my-6"> <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Biz haqimizda</a></li>
            <li class="pb-4"><a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Ariza qoldirish</a></li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
