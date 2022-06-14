@extends('layouts.app')

@section('content')

    <div class="w-11/12 mx-auto pt-24 pb-8">
        <div class=" flex flex-row gap-x-4">
            <div class="my-auto w-1/2 mx-auto">
                <h1 class="text-3xl my-8 font-medium">Lorem ipsum dolor</h1>
                <p class="text-lg">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
            <div class="w-1/2 mx-auto">
                <img class="border-2 rounded-xl border-yellow-300 shadow-xl"
                     src="https://media.istockphoto.com/vectors/medical-school-students-doctors-studying-hospital-staff-reading-books-vector-id1280787194?k=20&m=1280787194&s=612x612&w=0&h=k4QvCBleiZ-PwEKy4U55LVEQXDJ9KTaZ_7DlMGOkPxA=" alt="">
            </div>
        </div>
    </div>

        {{--    kategoriyalar    --}}
    <div class="my-6 w-11/12 mx-auto">
       <h1 class="text-center sm:text-5xl text-3xl font-bold mt-4 mb-12">Kategoriyalar</h1>
           <div class="container mx-auto px-10">
               <div style='background-color:rgb(255, 255, 255)'>
                   <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                                Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                       <div class="flex gap-x-2 items-center p-3 bg-gray-100 hover:bg-yellow-300 rounded-lg cursor-pointer hover:text-gray-50">
                           <div class="">
                               <svg class="hi-outline hi-template inline-block w-12 h-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                               </svg>
                           </div>
                           <h3 class="text-lg font-bold">
                               Matematika
                           </h3>
                       </div>

                   </div>
               </div>
           </div>
    </div>

        {{--   telegram bot   --}}
    <div class="py-24 my-24" style="background: linear-gradient(315deg, #fce043 0%, #fb7ba2 74%);background-color: #fce043">
        <div class="w-11/12 mx-auto grid grid-cols-12 gap-x-4 items-center">
            <div class="col-span-8 my-auto text-white">
                <h1 class="text-3xl mb-4 font-medium">Bot orqali ariza qoldirish</h1>
                <p class="text-lg">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-span-4">
               <button class="border-2 rounded-3xl px-8 py-2 text-2xl text-white border-white hover:border-blue-500 hover:text-blue-500">
                   <a href="#">Botga o'tish</a>
               </button>
            </div>
        </div>
    </div>

@endsection
