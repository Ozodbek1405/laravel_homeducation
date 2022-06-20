@extends('layouts.app')

@section('content')

    <div class=" pt-32 pb-8" style="background: #0c375e">
        <div class=" flex flex-row gap-x-4 w-11/12 mx-auto text-white">
            <div class="w-1/2 mx-auto">
                <img class="" src="https://demo.themexbd.com/rtl/acadamy/wp-content/uploads/2022/03/slider-image.png" alt="">
            </div>
            <div class="my-auto w-2/5 mx-auto">
                <p class="text-base font-medium mb-3">WE ARE READY EDUTION</p>
                <h1 class="text-3xl mb-8 font-medium">Exorbitant learning, more likelihood</h1>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do usmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim is nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo uat. Duis aute irure dolor in reprehenderit</p>
            </div>
        </div>
    </div>

        {{--    kategoriyalar    --}}
    <div class="my-6 w-11/12 mx-auto my-32">
       <h1 class="text-center sm:text-5xl text-3xl font-bold mt-4 mb-12">Kategoriyalar</h1>
           <div class="container mx-auto px-10">
               <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
                   @foreach($categories as $category)
                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 rounded-lg cursor-pointer">
                           <div class="">
                               <img src=" {{ asset('storage/'.$category->icon) }}" alt="" class="h-12 w-12">
                           </div>
                           <h3 class="text-lg font-bold text-blue-900 hover:text-red-600">
                               {{$category->name}}
                           </h3>
                       </div>
                   @endforeach
               </div>
           </div>
    </div>
            {{--  biz haqimizda  --}}
    <div class="w-11/12 mx-auto mb-24">
        <h1 class="text-center font-semibold text-5xl mb-12 border-b-2 border-blue-900 pb-6">Biz haqimizda</h1>
        <div class="grid grid-cols-2 text-lg">
            <div class="col-span-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="mt-4">
                    <li class="flex flex-row items-center gap-x-2">
                        <i class="fas fa-check-double text-blue-600"></i>
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </li>
                    <li class="flex flex-row items-center gap-x-2">
                        <i class="fas fa-check-double text-blue-600"></i>
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </li>
                    <li class="flex flex-row items-center gap-x-2">
                        <i class="fas fa-check-double text-blue-600"></i>
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </li>
                </ul>
            </div>
            <div class="col-span-1">
                <p class="mb-8">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="border-2 px-4 py-3 rounded-lg font-medium cursor-pointer hover:text-white hover:bg-blue-900" style="border-color: #0c375e">Ko'proq o'qish</a>
            </div>
        </div>
    </div>

        {{--   telegram bot   --}}
    <div class="py-24 my-24" style="background: #0c375e">
        <div class="w-11/12 mx-auto grid grid-cols-12 gap-x-4 items-center ">
            <div class="col-span-8 my-auto text-white">
                <h1 class="text-3xl mb-4 font-medium">Bot orqali ariza qoldirish</h1>
                <p class="text-lg">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-span-4">
               <button class="border-2 rounded-3xl px-8 py-2 text-2xl text-white border-white hover:bg-red-700">
                   <a href="#">Botga o'tish</a>
               </button>
            </div>
        </div>
    </div>


    <div class="w-11/12 mx-auto mb-24">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <h2 class="text-red-600 text-2xl my-8">Nima uchun bizni tanlaysiz</h2>
                <h1 class="text-4xl font-bold text-gray-600 mb-6">Sizning maqsadingiz - bizning yutug'imiz</h1>
                <p class="text-lg">Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus.</p>
                <div class="flex flex-row items-center gap-x-4 mt-8">
                    <i class="fas fa-check-circle text-2xl text-white px-3 py-2 bg-red-600 rounded-2xl"></i>
                    <p class="text-lg">Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                </div>
                <div class="flex flex-row items-center gap-x-4 mt-4">
                    <i class="fas fa-check-circle text-2xl text-white px-3 py-2 bg-red-600 rounded-2xl"></i>
                    <p class="text-lg">Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                </div>
                <div class="flex flex-row items-center gap-x-4 mt-4">
                    <i class="fas fa-check-circle text-2xl text-white px-3 py-2 bg-red-600 rounded-2xl"></i>
                    <p class="text-lg">Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                </div>
            </div>
            <div class="col-span-1">
                <img src="https://preview.tailwindtemplates.co/plain/assets/images/about.svg" alt="#">
            </div>
        </div>
    </div>



@endsection
