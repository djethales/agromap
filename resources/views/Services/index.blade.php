@extends('layouts.default')

@section('content')

<!--header nos services-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-slider-3" style="height: 500px;">
    </div>
    <div class="brand-title relative">
        <span></span>
        <div class=" rounded-full p-1 flex justify-center items-center">
            <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
</header>


<section class="md:container md:mx-auto px-8 lg:px-24 pt-12  pb-8 lg:pb-24">
    <div class="text-center py-20">
        <h4 class="text-4xl sm:text-6xl font-extrabold uppercase" style="color:#0742F2;">Nos Services</h4>
        <p class="text-lg text-gray-600">
           {{__(' AGRO-MAP est une entreprise qui développe les projets de
           durabilité dans les domaines ')}}
        </p>
    </div>
    <div class="flex flex-wrap justify-center font-rubik">
        @foreach ($posts as $post)
        <div class="my-4 sm:w-1/2 lg:w-1/4">
            <div class="px-4">
                <img src="{{asset('imgposts/'.$post->image)}}" style="border-top-left-radius:1em;border-top-right-radius:1em;">
                <div class="pt-4" style=" border-bottom-left-radius:1em;border-bottom-right-radius:1em;">
                    <h4 class="uppercase py-2 font-bold text-sm text-gray-800"> {{$post->title}}</h4>
                    <div class="pb-4  -mt-5 text-gray-600 ">.
                        {!! Str::words($post->content, 10, '...') !!}
                    </div>
                    <a href="{{route('service.show',['name'=>$post->id])}}" class="outline-none font-rubik text-white rounded-sm text-center w-32 py-2 block" style=" background:#0742f2;">lire la suite</a>
                </div>
            </div>
        </div>


        @endforeach
    </div>
</section>


@endsection

