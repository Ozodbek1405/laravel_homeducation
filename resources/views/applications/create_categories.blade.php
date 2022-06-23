@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border sm:px-10 px-0 rounded-md xl:w-1/2 w-11/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container sm:p-5 p-2">
                <p class="text-2xl font-semibold mb-3 text-center">
                    Kategoriyalardan birini tanlang
                </p>
                <form action="{{route('create.category.store')}}" method="POST" class="my-10">
                    @csrf
                    <div class="my-6">
                        @foreach($categories as $category)
                            <div class="flex flex-row sm:w-1/2 w-7/12 mx-auto gap-x-4 items-center my-4">
                                <input type="checkbox" name="category_name[]" value="{{$category->name}}" class="w-4 h-4" id="{{$category->name}}">
                                <label class="text-xl" for="{{$category->name}}">{{$category->name}}</label>
                            </div>
                        @endforeach
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
@endsection
