@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md w-full md:w-6/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container p-5">
                <p class="text-2xl font-semibold mb-3 text-center">
                    @lang('lang.create')
                </p>
                <form action="{{route('create.type.store',$application)}}" method="POST" class="my-10">
                    @csrf
                    <div class="flex flex-row mx-auto sm:w-9/12 w-full gap-x-2">
                        <div class="flex gap-x-2 items-center mx-auto">
                            <input class="h-4 w-4" type="radio" name="type" value="customer" id="parent" checked>
                            <label class="text-lg cursor-pointer" for="parent">@lang('lang.create_parent')</label>
                        </div>
                        <div class="flex gap-x-2 items-center mx-auto">
                            <input class="h-4 w-4" type="radio" name="type" value="teacher" id="teacher">
                            <label class="text-lg cursor-pointer" for="teacher">@lang('lang.create_teacher')</label>
                        </div>
                    </div>
                    <div class="flex mx-auto my-12">
                        <input type="submit" id="next"
                               class="mx-auto cursor-pointer text-white font-normal text-2xl py-3 px-14 rounded-2xl"
                               value="@lang('lang.yuborish')">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
