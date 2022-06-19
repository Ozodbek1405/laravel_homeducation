@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md w-full md:w-6/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container p-5">
                <p class="text-2xl font-semibold mb-3 text-center">
                    Ma'lumotlaringizni kiriting
                </p>
                <form action="" method="" class="my-10">
                    <div class="my-6">
                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Ism familyangizni kiriting
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Ism familyangizni kiriting">
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                               Yoshingiz
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                             focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="Yoshingiz...">
                        </div>

                        <div class="my-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Mutaxasisligingiz qaysi fanlar boyicha
                            </label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                             border-gray-300 focus:outline-none" placeholder="Masalan, bir nechta fanlar..."></textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-x-4 my-4">
                            <div class="block">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    Ma’lumotingiz
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="radio" value="1" checked>
                                            <span class="ml-2">Oliy</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="radio" value="2">
                                            <span class="ml-2">Tugallanmagan oliy</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="radio" value="3">
                                            <span class="ml-2">O'rta maxsus</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="block">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    Faningizni rus tilida o`ta olasizmi?
                                </label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="radio" value="2">
                                            <span class="ml-2">Ha</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="radio" value="2">
                                            <span class="ml-2">Yoq</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Rezumengizni yuklang</label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                        </div>

                        <div class="my-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Telefon raqamingizni kiriting
                            </label>
                            <input class="shadow appearance-none border border-gray-300 rounded w-full
                            py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                   id="phone_number" type="text" placeholder="+998 ** *** ** **">
                        </div>

                    </div>

                    <div class="flex mx-auto my-12 w-9/12 mx-auto">
                        <a onclick="myFunction()">
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
                               class="mx-auto cursor-pointer text-white font-normal text-2xl py-3 px-14 rounded-2xl"
                               name="" value="Yuborish">
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
