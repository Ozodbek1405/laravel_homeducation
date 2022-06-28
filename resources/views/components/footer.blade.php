<footer class="text-center lg:text-left text-white">
    <div class="p-6 border-b border-gray-300" style="background: #b61e36">
        <div class="w-11/12 mx-auto flex justify-center items-center lg:justify-between">
            <div class="mr-12 hidden lg:block text-white">
                <span>Ijtimoiy tarmoqlarda biz bilan bog'laning:</span>
            </div>
            <div class="flex justify-center text-white">
                <a href="{{setting('site.site_facebook_link')}}" class="mr-6 hover:text-blue-900">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{setting('site.site_telegram_link')}}" class="mr-6 hover:text-blue-900">
                    <i class="fab fa-telegram"></i>
                </a>
                <a href="{{setting('site.site_gmail_link')}}" class="mr-6 hover:text-blue-900">
                    <i class="fab fa-google"></i>
                </a>
                <a href="{{setting('site.site_instagram_link')}}" class="mr-6 hover:text-blue-900">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="px-6 py-10 text-center md:text-left" style="background: #0c375e">
        <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-11/12 mx-auto py-12">
            <div class="">
                <a href="/" class="flex items-center px-2 pb-2">
                    <img src="/storage/{!!str_replace("\\","/",setting('site.site_footer_logo'))!!}" alt="Logo" class="h-16 w-32">
                </a>
                <p>{{setting('site.footer_text')}}</p>
            </div>
            <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    FOYDALI HAVOLALAR
                </h6>
                <p class="mb-4">
                    <a href="{{route('home.about_us')}}" class="hover:text-red-600">Biz haqimizda</a>
                </p>
                <p class="mb-4">
                    <a href="{{route('faq')}}" class="hover:text-red-600">FAQ</a>
                </p>
                <p class="mb-4">
                    <a href="{{route('home.instruction')}}" class="hover:text-red-600">Yo'riqnoma</a>
                </p>
            </div>
            <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Aloqa uchun
                </h6>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                         class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                              d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                        </path>
                    </svg>
                   {{setting('site.footer_address')}}
                </p>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                         class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                        </path>
                    </svg>
                    {{setting('site.footer_email')}}
                </p>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                         class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                        </path>
                    </svg>
                    {{setting('site.footer_phone')}}
                </p>
            </div>
        </div>
    </div>
    <div class="text-center p-6 bg-gray-200 border-t-2 " style="background: #0c375e">
        <span>© 2022 HOMEDUCATION</span>
    </div>
</footer>
