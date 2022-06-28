@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md xl:w-1/2 w-11/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container sm:p-5 p-2">
                <p class="text-2xl font-semibold mb-3 text-center">
                    @lang('lang.information')
                </p>
                <form action="{{route('create.teacher.store',$application)}}" method="POST" enctype="multipart/form-data" class="my-10">
                    @csrf
                    <div class="my-6">
                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                @lang('lang.ism_familya')
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="@lang('lang.ism_familya')" value="{{old('name')}}">
                            @error('name')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                               @lang('lang.yoshingiz')
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="age_teacher" type="number" placeholder=" @lang('lang.yoshingiz')..."
                            value="{{old('age_teacher')}}">
                            @error('age_teacher')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                @lang('lang.mutaxassis_fan')
                            </label>
                            <textarea rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" name="speciality_science_teacher" placeholder="@lang('lang.mas_fan')..."
                            >{{old('speciality_science_teacher')}}</textarea>
                            @error('speciality_science_teacher')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-x-4 my-4">
                            <div class="block sm:col-span-1 col-span-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    @lang('lang.malumoti')
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="degree_teacher" value="oliy">
                                            <span class="ml-2">@lang('lang.oliy')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="degree_teacher" value="tugallanmagan_oliy">
                                            <span class="ml-2">@lang('lang.tugal_oliy')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="degree_teacher" value="o'rta_maxsus">
                                            <span class="ml-2">@lang('lang.orta')</span>
                                        </label>
                                    </div>
                                    @error('degree_teacher')
                                        <p class="text-red-500"> {{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="block sm:col-span-1 col-span-2 sm:mt-0 mt-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    @lang('lang.qaysi_til')
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="lesson_lang" value="ha">
                                            <span class="ml-2">@lang('lang.ha')</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="lesson_lang" value="yoq">
                                            <span class="ml-2">@lang('lang.yoq')</span>
                                        </label>
                                    </div>
                                    @error('lesson_lang')
                                        <p class="text-red-500"> {{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="my-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">
                                @lang('lang.rezume')
                            </label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400
                            focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="resume" type="file">
                            @error('resume')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                @lang('lang.phone_number')
                            </label>
                            <input class="shadow appearance-none border border-gray-300 rounded w-full
                            py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value="{{old('phone_number')}}"
                                   id="phone_number" name="phone_number" type="text" placeholder="+998 ** *** ** **">
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
