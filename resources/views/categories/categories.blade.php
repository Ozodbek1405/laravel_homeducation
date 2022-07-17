@extends('layouts.app')

@section('content')

<div class="w-11/12 mx-auto mb-24">
    <h1 class="text-center sm:text-5xl text-3xl font-bold mt-32 mb-12 ">@lang('lang.category')</h1>
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
            @foreach($categories as $category)
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <div>
                        <img class="rounded-t-lg w-full h-52" src="{{ asset('storage/'.$category->images) }}" alt="#"/>
                    </div>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$category->getTranslatedAttribute('name',Session::get('lang') , 'fallbackLocale')}}</h5>
                        <p class="text-gray-700 text-base mb-4">
                            {{$category->getTranslatedAttribute('description',Session::get('lang') , 'fallbackLocale')}}
                        </p>
                        <form action="{{route('home.category.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="category_name" value="{{$category->name}}">
                            <button type="submit" class="float-right mb-4 inline-block px-6 py-2.5 bg-blue-900 text-white
                                font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-600 ">@lang('lang.arizaqol')
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
