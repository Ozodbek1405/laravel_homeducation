@extends('layouts.app')

@section('content')

    <div class=" pt-32 pb-8" style="background: #0c375e">
        <div class=" flex flex-row gap-x-4 w-11/12 mx-auto text-white">
            <div class="w-1/2 mx-auto md:block hidden">
                <img class="" src="{{ getContentImage('home', 'header') }}" alt="">
            </div>
            <div class="my-auto md:w-2/5 w-full mx-auto">
                {!! getContentText('home', 'header') !!}
            </div>
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
                                   <p>{{$category->name}}</p>
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
            {{--  biz haqimizda  --}}
    <div class="w-11/12 mx-auto mb-24">
        <h1 class="text-center font-semibold text-5xl mb-12 border-b-2 border-blue-900 pb-6">@lang('lang.about_me')</h1>
        <div class="grid grid-cols-2 text-lg gap-x-4">
            {!! getContentText('home', 'about_us') !!}
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



@endsection
