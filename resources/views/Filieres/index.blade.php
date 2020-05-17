@extends('layouts.default')
@section('content')

<!--header nos fillières-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-filliere" style="height: 500px; background-position-y:100%;">
    </div>
    <div class="brand-title relative">
       <span class=""></span>
       <div class=" rounded-full p-1 flex justify-center items-center">
        <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
</div>
   
</header>

<section>
    <div class="w-full px-4 md:px-20  py-16 text-gray-100">
        <div class="lg:flex flex-wrap text-gray-600 text-sm">           
            
            <div class="lg:w-1/2 p-3 overflow-hidden">
                <div class="relative border border-dashed  ag-fill " style="border-color:#209e2e;">

                    <div class="pb-20 px-32 bg-fill-cacao-cafe flex items-center justify-center" style="height:274px;">
                        <h3 class="rounded-sm font-rubik-bold bg-white text-2xl px-8 text-center py-2 capitalize" style="color:#209e2e;">
                            café <span class="font-rubik-light">/</span> cacao
                        </h3>
                    </div>
                    <div class="body-fill w-full">
                        <div class="relative py-24 px-5">
                            <div class="fill-bg absolute">
                                <img src="{{asset('images/fillier.png')}}" style="width:120px;" class="mx-auto">
                                <img src="{{asset('images/1.png')}}" class="mx-auto pb-3" style="width:60px; margin-top:-1em;"> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="lg:w-1/2 p-3 overflow-hidden">
                <div class="relative border border-dashed ag-fill" style="border-color:#209e2e;">

                    <div class="pb-20 px-32 bg-fill-palmier-hevea flex items-center justify-center" style="height:274px;">
                        <h3 class="rounded-sm font-rubik-bold bg-white px-8 text-2xl text-center py-2 capitalize" style="color:#209e2e;">
                            palmier <span class="font-rubik-light">/</span> hévéa
                        </h3>
                    </div>
                    <div class="body-fill w-full">
                        <div class="relative py-24 px-5">
                            <div class="fill-bg absolute">
                                <img src="{{asset('images/fillier.png')}}" style="width:120px;" class="mx-auto">
                                <img src="{{asset('images/2.png')}}" class="mx-auto pb-3" style="width:60px; margin-top:-1em;"> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="lg:w-1/2 p-3 overflow-hidden">
                <div class="relative border border-dashed  ag-fill " style="border-color:#209e2e;">

                    <div class="pb-20 px-32 bg-fill-coton-anarcade flex overflow-hidden items-center justify-center" style="height:274px;">
                        <h3 class="rounded-sm font-rubik-bold bg-white  px-8 text-2xl text-center py-2 capitalize" style="color:#209e2e;">
                            coton <span class="font-rubik-light">/</span> anarcade
                        </h3>
                    </div>
                    <div class="body-fill w-full">
                        <div class="relative py-24 px-5">
                            <div class="fill-bg absolute">
                                <img src="{{asset('images/fillier.png')}}" style="width:120px;" class="mx-auto">
                                <img src="{{asset('images/3.png')}}" class="mx-auto pb-3" style="width:60px; margin-top:-1em;"> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="lg:w-1/2 p-3 overflow-hidden">
                <div class="relative border border-dashed  ag-fill " style="border-color:#209e2e;">

                    <div class="pb-20 px-32 bg-fill-culture-vivriere flex items-center justify-center" style="height:274px;">
                        <h3 class="rounded-sm font-rubik-bold bg-white text-2xl px-8 text-center py-2 capitalize" style="color:#209e2e;">
                            cultures vivrières
                        </h3>
                    </div>
                    <div class="body-fill w-full">
                        <div class="relative py-24 px-5">
                            <div class="fill-bg absolute">
                                <img src="{{asset('images/fillier.png')}}" style="width:120px;" class="mx-auto">
                                <img src="{{asset('images/4.png')}}" class="mx-auto pb-3" style="width:60px; margin-top:-1em;"> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection