<!DOCTYPE html>
<html lang="{{setting('language','en')}}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{setting('site.title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<section class="py-8" style="background: #0c375e">
    <div class="lg:w-8/12 mx-auto w-10/12">
        <div class="flex flex-row items-center">
           <a href="/" class="flex items-center p-2 w-1/2">
                <img src="/storage/{!!str_replace("\\","/",setting('site.site_footer_logo'))!!}" alt="Logo" class="h-16 w-32">
            </a>
           <div class="flex flex-row mx-auto">
               <a href="/" class="items-center py-4 px-2 text-white hover:text-gray-400 lg:block hidden">
                   @lang('lang.faq_title')
               </a>
               <div class="flex items-center justify-center ml-12">
                   @if (session('lang') == 'ru')
                       <a href="{{route('lang', ['lang'=>'uz'])}}" class="text-white mr-2">
                           UZ
                       </a>
                       I
                       <a href="{{route('lang', ['lang'=>'ru'])}}" class="text-red-500 text-white ml-2">
                           RU
                       </a>
                   @else
                       <a href="{{route('lang', ['lang'=>'uz'])}}" class="text-red-500 text-white mr-2">
                           UZ
                       </a>
                       I
                       <a href="{{route('lang', ['lang'=>'ru'])}}" class="text-white ml-2">
                           RU
                       </a>
                   @endif
               </div>
           </div>
        </div>
        <h1 class="lg:text-3xl md:text-2xl sm:text-xl text-white  font-light  my-6">
            @lang('lang.faq_text')
        </h1>
        <form action="{{route('faq.question')}}" method="POST">
            @csrf
            <div class="flex relative mx-auto w-full">
                <input class="bg-gray-400  h-16 sm:pl-16 pl-4 pr-6 rounded-md focus:outline-none focus:border-yellow-500 focus:bg-white w-full text-black lg:md:text-base text-base hover:bg-gray-400"
                       type="text" name="questions" placeholder="Savolingizni qoldiring...   " required/>
                <input type="submit" class="rounded-md bg-gray-400 cursor-pointer ml-4 px-5 text-xl hover:text-white hover:bg-red-500" value="@lang('lang.yuborish')">
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
                    <a href="/"><h4 class="text-2xl text-gray-500 mb-3"> {{$faq->getTranslatedAttribute('questions',Session::get('lang') , 'fallbackLocale')}}</h4></a>
                    <p class="text-lg text-gray-400">{{$faq->getTranslatedAttribute('answer',Session::get('lang') , 'fallbackLocale')}}</p>
                </div>
            </div>
        </section>
    @endif
@endforeach
</body>
