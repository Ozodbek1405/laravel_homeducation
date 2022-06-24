@extends('layouts.app')

@section('content')

    <div class="w-11/12 container mx-auto my-12 pt-16">
        <h1 class="text-center text-5xl font-semibold mx-6 mb-16">Ariza qoldirish haqida yo'riqnoma</h1>
        @foreach ($instructions as $instruction)
            <div class="flex lg:flex-row  flex-col gap-x-4 my-6">
                <div class="lg:w-1/2 w-full">
                    <img class="w-full h-96 rounded-lg" src="{{ asset('storage/'.$instruction->images) }}" alt="#">
                </div>
                <div class="lg:w-1/2 w-full lg:mt-0 mt-4">
                    <h1 class="text-left text-3xl">{{$instruction->title}}</h1>
                    <p class="text-left text-xl mt-3">{{$instruction->text}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
