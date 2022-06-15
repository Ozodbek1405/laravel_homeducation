@extends('layouts.app')

@section('content')

    <div class=" pt-32 pb-8" style="background: linear-gradient(90deg, rgba(241,241,183,1) 0%, rgba(241,241,183,1) 7%, rgba(241,241,183,0.846673703661152) 11%, rgba(253,248,95,1) 91%);">
        <div class=" flex flex-row gap-x-4 w-11/12 mx-auto text-blue-800">
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

    <div class="w-11/12 mx-auto mb-12">
        <h1 class="text-center font-semibold text-5xl mb-12">Biz haqimizda</h1>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 gap-x-2 ">
            <div class="flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Batafsil
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Batafsil
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                        <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Batafsil
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


        {{--   telegram bot   --}}
    <div class="py-24 my-24" style="background: linear-gradient(90deg, rgba(241,241,183,1) 0%, rgba(241,241,183,1) 7%, rgba(241,241,183,0.846673703661152) 11%, rgba(253,248,95,1) 91%);">
        <div class="w-11/12 mx-auto grid grid-cols-12 gap-x-4 items-center ">
            <div class="col-span-8 my-auto text-blue-800">
                <h1 class="text-3xl mb-4 font-medium">Bot orqali ariza qoldirish</h1>
                <p class="text-lg">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-span-4">
               <button class="border-2 rounded-3xl px-8 py-2 text-2xl text-blue-800 border-blue-800 hover:bg-yellow-300 hover:text-white">
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
