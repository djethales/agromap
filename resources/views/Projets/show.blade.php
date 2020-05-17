@extends('layouts.default')

@section('content')

    <!--header nos services-->
    <header class="relative w-full">
        <div class="relative w-full overflow-hidden bg-agri-projet" style="height: 500px;">
            <div class="absolute opacity-50 bg-black w-full left-0 top-0 bottom-0 right-0"></div>
        </div>
        <div class="brand-title relative">
            <span></span>
            <div class=" rounded-full p-1 flex justify-center items-center">
                <img src="{{asset('images/logo.png')}}">
            </div>
        </div>
    </header>

    <section class=" pt-24">
        <div class="px-6   lg:container lg:mx-auto lg:px-8 ">
            <div class=" flex flex-col items-center">
                <div class=" md:w-10/12 lg:w-10/12 ">
                    <div class="border border-dashed w-full py-8 px-5 lg:p-10" style="border-color:#209e2e; border-radius:1em;">
                        <h2 class="capitalize text-4xl text-gray-800 font-raleway" style="color:#209e2e; ">{{$post->title}} </h2>
                        <span class="h-2 w-10  inline-block"  style="background:#0742F2;"></span>
                        <span class="inline-block border  float-right py-1 px-6 text-center text-gray-600"  style="border-color:#209e2e; border-radius:2em;"> nos services</span>
                    </div>

                    <div class="py-16 font-rubik ">
                        <img src="{{asset('imgposts/'.$post->image)}}" class="img-fluid">
                        <div class="text-gray-600 pt-8 ">
                            {!! $post->content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

