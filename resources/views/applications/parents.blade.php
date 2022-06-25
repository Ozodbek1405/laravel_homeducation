@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md xl:w-1/2 w-11/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container sm:p-5 p-2">
                <p class="text-2xl font-semibold mb-3 text-center">
                    Ma'lumotlaringizni kiriting
                </p>
                <form action="{{route('create.parent.store',$application)}}" method="POST" class="my-10">
                    @csrf
                    <div class="my-6">
                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Ism familyangizni kiriting
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="name" type="text"
                                   placeholder="Ism familyangizni kiriting" value="{{old('name')}}">
                            @error('name')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Necha nafar farzandingizga buyurtma berasiz
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" name="number_of_children" type="number"
                                   placeholder="Farzandlaringiz soni" value="{{old('number_of_children')}}">
                            @error('number_of_children')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Farzandlaringiz ism familyasini kiriting
                            </label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" name="about_children" placeholder="Bittadan ko'p bo'lsa vergul bilan kiriting...">{{old('about_children')}}
                            </textarea>
                            @error('about_children')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Farzandlaringiz yoshini yoki sinfini kiriting
                            </label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" name="children_age" placeholder="Bittadan ko'p bo'lsa vergul bilan kiriting...">{{old('children_age')}}
                            </textarea>
                            @error('children_age')
                                <p class="text-red-500"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-x-4 my-4">
                            <div class="block sm:col-span-1 col-span-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    O’qituvchini tanlang
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="erkak">
                                            <span class="ml-2">Erkak</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="ayol">
                                            <span class="ml-2">Ayol</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="teacher_gender" value="farq_yoq">
                                            <span class="ml-2">Farqi yoq</span>
                                        </label>
                                    </div>
                                    @error('teacher_gender')
                                        <p class="text-red-500"> {{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="block sm:col-span-1 col-span-2 sm:mt-0 mt-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    Fan qaysi tilda o'tilishini xohlaysiz
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="science_lang" value="o'zbek_tili">
                                            <span class="ml-2">O'zbek tilida</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="science_lang" value="rus_tili">
                                            <span class="ml-2">Rus tilida</span>
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
                                Telefon raqamingizni kiriting
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
                                   value="Orqaga">
                        </a>
                        <script>
                            function myFunction() {
                                window.history.back();
                            }
                        </script>
                        <input type="submit" id="next"
                               class="mx-auto cursor-pointer text-white font-normal text-2xl py-3 px-14 rounded-2xl sm:mt-0 mt-6"
                               value="Yuborish">
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
