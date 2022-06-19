<!DOCTYPE html>
<html lang="{{setting('language','en')}}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>F.A.Q </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{$app_logo ?? ''}}"/>
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<section class="py-8" style="background: #0c375e">
    <div class="lg:w-8/12 mx-auto w-10/12">
        <div class="sm:block lg:flex flex-column justify-between ">
            <a href="/" class="flex items-center py-4 px-2">
                <img src="/storage/{!!str_replace("\\","/",setting('site.logo'))!!}" alt="Logo" class="h-12 w-32">
            </a>
            <a href="/" class="items-center py-4 px-2 text-white hover:text-red-500">
                <i class="fa fa-link"></i>
                Homeducation veb-saytiga o'ting
            </a>
        </div>
        <h1 class="lg:text-3xl md:text-2xl sm:text-xl text-white  font-light  my-6">
            Homeducation tomonidan tez-tez beriladigan savollarga javoblar va tavsiyalar
        </h1>
        <form action="{{route('faq.question')}}" method="POST">
            @csrf
            <div class="flex relative mx-auto w-full">
                <input class="bg-gray-400  h-16 pl-16 pr-6 rounded-md focus:outline-none focus:border-yellow-500 focus:bg-white w-full text-black lg:md:text-base text-base hover:bg-gray-400"
                       type="text" name="questions" placeholder="Savolingizni qoldiring...   " required/>
                <input type="submit" class="rounded-md bg-gray-400 cursor-pointer ml-4 px-5 text-xl hover:text-white hover:bg-red-500" value="Yuborish">
            </div>
            @if(session()->has('message'))
                <div class="text-white   text-xl">
                    {{ session()->get('message') }}
                </div>
            @endif
        </form>
    </div>
</section>
@foreach($faqs as $faq)
    @if($faq->answer !=null)
        <section class="mt-7">
            <div class=" lg:w-10/12 md:w-8/12 sm:w-8/12 flex mx-auto md:flex sm:flex items-center bg-white py-5 px-8 rounded-md shadow-lg shadow-indigo-300/40">
                <img src="https://freepngimg.com/thumb/tax/81517-status-text-faq-tax-logo-filing.png" alt="" class="lg:h-20 md:h-16 sm:h-14 h-8">
                <div class="px-6 py-3">
                    <a href="/"><h4 class="text-2xl text-gray-500 mb-3">{{$faq->questions}}</h4></a>
                    <p class="text-lg text-gray-400">{{$faq->answer}}</p>
                </div>
            </div>
        </section>
    @endif
@endforeach
</body>
