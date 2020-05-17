@extends('layouts.default')
@section('content')

<!--header nos projet-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-agri-projet" style="height: 500px;"> </div>
    <div class="brand-title relative">
       <span class=""></span>
       <div class=" rounded-full p-1 flex justify-center items-center">
            <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
</header>

<section>
    <div class="w-full md:px10 lg:px-20 py-16 text-gray-100">
        <div class="md:flex flex-wrap text-gray-600 text-sm">
            @foreach ($posts as $post)
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative px-10 lg:py-5 ag-projet">
                        <h3 class="text-2xl py-3">{{ Str::words($post->title,10)}}</h3>
                        <p>
                            {!! Str::limit($post->content,100) !!}
                        </p>
                        <a href="{{route('projets.show',['name'=>$post->id])}}"  class=" inline-block mt-6 px-6 py-1 bg-white text-lg rounded-sm"> lire la suite</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
