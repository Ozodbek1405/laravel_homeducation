@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <div class=" pt-32 pb-8" style="background: #0c375e">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="md:block hidden">
                        <div class="flex flex-row gap-x-4 w-11/12 mx-auto text-white">
                            <div class="w-1/2 mx-auto">
                                <img class="rounded-xl" src="{{ getContentImage('home', 'header1') }}" alt="">
                            </div>
                            <div class="my-auto md:w-2/5 w-full mx-auto">
                                {!! getContentText('home', 'header1') !!}
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden block text-white flex flex-row mb-10">
                        <div class="w-full ml-8">
                            {!! getContentText('home', 'header_mobile1') !!}
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="md:block hidden">
                        <div class="flex flex-row gap-x-4 w-11/12 mx-auto text-white">
                            <div class="w-1/2 mx-auto">
                                <img class="rounded-xl" src="{{ getContentImage('home', 'header1') }}" alt="">
                            </div>
                            <div class="my-auto md:w-2/5 w-full mx-auto">
                                {!! getContentText('home', 'header2') !!}
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden block text-white flex flex-row mb-10">
                        <div class="w-full ml-8">
                            {!! getContentText('home', 'header_mobile2') !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

        {{--    kategoriyalar    --}}
    <div class="my-6 w-11/12 mx-auto my-32">
       <h1 class="text-center sm:text-5xl text-3xl font-bold mt-4 mb-12">@lang('lang.category')</h1>
           <div class="container mx-auto px-10">
               <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
                   @foreach($categories as $category)
                       <a href="{{route('home.category')}}">
                           <div class="category transition duration-200 flex gap-x-2 items-center p-3 rounded-lg">
                               <div class="">
                                   <img src=" {{ asset('storage/'.$category->icon) }}" alt="" class="h-12 w-12">
                               </div>
                               <h3 class="text-lg font-bold text-white">
                                   <p>{{$category->getTranslatedAttribute('name',Session::get('lang') , 'fallbackLocale')}}</p>
                               </h3>
                           </div>
                       </a>
                       <style>
                           .category{
                               background: #0c375e;
                           }
                           .category:hover{
                               background: #b61e36;
                           }
                       </style>
                   @endforeach
               </div>
           </div>
    </div>
        {{--   telegram bot   --}}
    <div class="py-24 my-24" style="background: #0c375e">
        <div class="w-11/12 mx-auto grid grid-cols-12 gap-x-4 items-center ">
            <div class="md:col-span-8 col-span-12 my-auto text-white">
                {!! getContentText('home', 'bot') !!}
            </div>
            <div class="md:col-span-4 col-span-12 md:mt-0 mt-6">
               <button class="border-2 rounded-3xl px-8 py-2 text-2xl text-white border-white hover:bg-red-700">
                   <a href="{{setting('site.telegram_bot_link')}}">@lang('lang.bot')</a>
               </button>
            </div>
        </div>
    </div>


    <div class="w-11/12 mx-auto mb-24">
        <div class="grid grid-cols-2 gap-4">
            <div class="lg:col-span-1 col-span-2">
                {!! getContentText('home', 'why_choose_us') !!}
            </div>
            <div class="col-span-1 lg:block hidden my-auto">
                <img src="{{ getContentImage('home', 'why_choose_us') }}" alt="#">
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            grabCursor: false,
            loop: true,
            speed: 1500,
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: false
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
        });
    </script>
@endsection
