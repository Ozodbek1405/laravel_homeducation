@extends('layouts.app')

@section('content')

<div class="w-11/12 mx-auto pt-24 pb-16">
    <h1 class="text-center text-5xl font-semibold mt-6 mb-24">Biz haqimizda</h1>

    {{--  1  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-right text-center">
            <h1 class="text-gray-700 text-3xl font-bold">Bizning missiyamiz</h1>
            <div class="flex sm:flex-row flex-col gap-x-4 items-center">
                <span class="text-6xl text-gray-800 my-4">01</span>
                <p class="text-lg mt-6">O’zbekistonda qurilish sohasida eng ilg’or texnologiyalarni joriy etib, zamonaviy dizayn yechimlarini
                    yaratib kelmoqdamiz. Birinchi o’rinda xodimlarimizga tayanib, biz mijozlarimizning
                    umidlarini amalga oshirib, ko’p yillar davomida arzon uy-joy va sanoat sohasidagi binolarni qurib kelmoqdamiz.
                </p>
            </div>
        </div>
        <div class="lg:col-span-1 col-span-2">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="https://di.uz/wp-content/uploads/2020/11/vision.jpg" alt="#">
        </div>
    </div>

    {{--  2  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 lg:block hidden">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="https://di.uz/wp-content/uploads/2021/08/Bizning_missiyamiz-1.jpg" alt="#">
        </div>
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-left text-center lg:block hidden">
            <h1 class="text-gray-700 text-3xl font-bold">Kelajak tasavvurimiz</h1>
            <div class="flex sm:flex-row flex-col gap-x-4 items-center">
                <p class="text-lg mt-6">Noyob me’moriy qiyofani yaratish, tarixda qoladigan binolarni barpo etish.
                    Hamkorlar va mijozlarimiz
                    uchun eng maqbul innovatsion qurilish kompaniyasi bo’lish va ishchilar uchun Mag’rurlik.
                </p>
                <span class="text-6xl text-gray-800 my-4">02</span>
            </div>
        </div>

        <div class="lg:col-span-1 col-span-2 my-auto sm:text-left text-center lg:hidden block">
            <h1 class="text-gray-700 text-3xl font-bold">Kelajak tasavvurimiz</h1>
            <div class="flex sm:flex-row flex-col gap-x-4 items-center">
                <span class="text-6xl text-gray-800 my-4">02</span>
                <p class="text-lg mt-6">Noyob me’moriy qiyofani yaratish, tarixda qoladigan binolarni barpo etish.
                    Hamkorlar va mijozlarimiz
                    uchun eng maqbul innovatsion qurilish kompaniyasi bo’lish va ishchilar uchun Mag’rurlik.
                </p>
            </div>
        </div>
        <div class="lg:col-span-1 col-span-2 lg:hidden block">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="https://di.uz/wp-content/uploads/2021/08/Bizning_missiyamiz-1.jpg" alt="#">
        </div>
    </div>

    {{--  3  --}}
    <div class="grid grid-cols-2 gap-x-6 my-6">
        <div class="lg:col-span-1 col-span-2 my-auto sm:text-right text-center">
            <h1 class="text-gray-700 text-3xl font-bold">Bizning qadriyatlarimiz</h1>
            <div class="flex sm:flex-row flex-col gap-x-4 items-center">
                <span class="text-6xl text-gray-800 my-4">03</span>
                <p class="text-lg mt-6">Doimiy takomillashtirish – Mijozlarning ishonchi –
                    Xodimlar va xavfsizlik – Atrof muhitni muhofaza qilish

                </p>
            </div>
        </div>
        <div class="lg:col-span-1 col-span-2">
            <img class="rounded-lg md:w-3/4 w-full h-96 mx-auto lg:mt-0 mt-8" src="https://di.uz/wp-content/uploads/2021/08/Qadriyatlar-1.jpg" alt="#">
        </div>
    </div>
</div>

@endsection
