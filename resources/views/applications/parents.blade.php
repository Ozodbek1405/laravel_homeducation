@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md xl:w-1/2 w-11/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container sm:p-5 p-2">
                <p class="text-2xl font-semibold mb-3 text-center">
                    @lang('lang.information')
                </p>
                <form action="{{route('create.parent.store',$application)}}" method="POST" class="my-10">
                    @csrf
                    <div class="my-6">
                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                @lang('lang.ism_familya')
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="name" type="text"
                                   placeholder="@lang('lang.ism_familya')" value="{{old('name')}}">
                            @error('name')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                @lang('lang.far_soni')
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="number_of_children" type="number"
                                   placeholder="@lang('lang.detey')" value="{{old('number_of_children')}}">
                            @error('number_of_children')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                @lang('lang.far_ism')
                            </label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" name="about_children" placeholder="...">{{old('about_children')}}
                            </textarea>
                            @error('about_children')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                               @lang('lang.far_yosh')
                            </label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" name="children_age" placeholder="...">{{old('children_age')}}
                            </textarea>
                            @error('children_age')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-x-4 my-4">
                            <div class="block sm:col-span-1 col-span-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    @lang('lang.oqit_tanlash')
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="erkak">
                                            <span class="ml-2">@lang('lang.erkak')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="ayol">
                                            <span class="ml-2">@lang('lang.ayol')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="farq_yoq">
                                            <span class="ml-2">@lang('lang.farqsiz')</span>
                                        </label>
                                    </div>
                                    @error('teacher_gender')
                                        <p class="text-red-500"> {{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="block sm:col-span-1 col-span-2 sm:mt-0 mt-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    @lang('lang.fan_tili')
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="science_lang" value="o'zbek_tili">
                                            <span class="ml-2">@lang('lang.uzbek')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="science_lang" value="rus_tili">
                                            <span class="ml-2">@lang('lang.rus')</span>
                                        </label>
                                    </div>
                                    @error('science_lang')
                                        <p class="text-red-500"> {{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="my-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                @lang('lang.phone_number')
                            </label>
                            <input class="shadow appearance-none border border-gray-300 rounded w-full
                            py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   id="phone_number" name="phone_number" type="text" placeholder="+998 ** *** ** **" value="{{old('phone_number')}}">
                            @error('phone_number')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>


                    </div>
                    <div class="flex sm:flex-row flex-col mx-auto my-12 w-9/12 mx-auto gap-x-2">
                        <a onclick="myFunction()" class="mx-auto">
                            <input type="button"
                                   class="mx-auto cursor-pointer bg-white border border-2 border-blue-900 text-blue-900 hover:text-red-600 hover:border-red-600 font-normal text-2xl py-3 px-14 rounded-2xl"
                                   value="@lang('lang.orqaga')">
                        </a>
                        <script>
                            function myFunction() {
                                window.history.back();
                            }
                        </script>
                        <input type="submit" id="next"
                               class="mx-auto cursor-pointer text-white font-normal text-2xl py-3 px-14 rounded-2xl sm:mt-0 mt-6"
                               value="@lang('lang.yuborish')">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src='https://unpkg.com/imask'></script>
    <script>
        var element = document.getElementById('phone_number');
        var maskOptions = {
            mask: '+998(00)000-00-00',
            lazy: false
        }
        var mask = new IMask(element, maskOptions);
    </script>
@endsection
