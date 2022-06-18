@extends('layouts.app')

@section('content')

    <div class="shadow-2xl my-32 border px-10 rounded-md w-full md:w-6/12 mx-auto grid grid-flow-col gap-4 my-5 flex flex-wrap md:flex-wrap-reverse mt-32">
        <div сlass="grid-rows-12">
            <div class="container p-5">
                <p class="text-2xl font-semibold mb-3 text-center">
                    Biror variantni tanlang
                </p>
                <form action="" method="" class="my-10">
                    <div class="flex flex-row mx-auto w-9/12">
                        <div class="flex gap-x-2 items-center mx-auto">
                            <input class="h-4 w-4" type="radio" name="radio" value="remote" id="remote">
                            <label class="text-lg" for="remote">Ota-ona</label>
                        </div>
                        <div class="flex gap-x-2 items-center mx-auto">
                            <input class="h-4 w-4" type="radio" name="radio" value="address" id="address">
                            <label class="text-lg" for="address">O'qituvchi</label>
                        </div>
                    </div>
                    <div class="flex mx-auto my-12">
                        <input type="submit" id="next" style="background: linear-gradient(90deg, rgba(85,127,238,0.846673703661152) 8%, rgba(36,162,237,1) 65%, rgba(68,135,238,1) 100%);"
                               class="mx-auto bg-yellow-500 hover:bg-yellow-600 cursor-pointer text-white font-normal text-2xl py-3 px-14 rounded-2xl"
                               name="" value="Yuborish">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
