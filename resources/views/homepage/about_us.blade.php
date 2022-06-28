@extends('layouts.app')

@section('content')

<div class="w-11/12 mx-auto pt-24 pb-16">
    <h1 class="text-center text-5xl font-semibold mt-6 mb-24">@lang('lang.about_me')</h1>

    {{--  1  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-right text-center">
            {!! getContentText('about_us', 'about_us_first') !!}
        </div>
        <div class="lg:col-span-1 col-span-2">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="{{ getContentImage('about_us', 'about_us_first') }}" alt="#">
        </div>
    </div>

    {{--  2  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 lg:block hidden">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="{{ getContentImage('about_us', 'about_us_second') }}" alt="#">
        </div>
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-left text-center lg:block hidden">
            {!! getContentText('about_us', 'about_us_second') !!}
        </div>

        <div class="lg:col-span-1 col-span-2 my-auto sm:text-left text-center lg:hidden block">
            {!! getContentText('about_us', 'about_us_second_mobile') !!}
        </div>
        <div class="lg:col-span-1 col-span-2 lg:hidden block">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="{{ getContentImage('about_us', 'about_us_second_mobile') }}" alt="#">
        </div>
    </div>

    {{--  3  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-right text-center">
            {!! getContentText('about_us', 'about_us_three') !!}
        </div>
        <div class="lg:col-span-1 col-span-2">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="{{ getContentImage('about_us', 'about_us_three') }}" alt="#">
        </div>
    </div>
</div>

@endsection
