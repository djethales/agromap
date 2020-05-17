@extends('layouts.default')

@section('content')

    <header class="relative overflow-hidden">
        <div class="slide overflow-hidden">

            <div class="bg-slider-1 ">
                <div class="h-screen wrapper"></div>
            </div>
            <div class="bg-slider-2 ">
                <div class="h-screen wrapper"></div>
            </div>
            <div class="bg-filliere" style ="background-position-y:100%">
                <div class="h-screen wrapper"></div>
            </div>
            <div class="bg-slider-3 ">
                <div class="h-screen wrapper"></div>
            </div>

        </div>
        <div class="controls-slider-top w-full">
            <div class="prev absolute w-10  flex justify-center items-center text-2xl h-24" ><button class="bg-transparent outline-none "><i class=" feather-chevron-left"></i></button></div>
            <div class="next absolute w-10  flex justify-center items-center text-2xl h-24"><button class="bg-transparent outline-none "><i class=" feather-chevron-right"></i></button></div>
        </div>
    </header>


 <!---
    <header class=" relative w-full h-screen" style="z-index:2;">
        <div class="slide ">
            <div class="h-screen wrapper bg-slider-1"> </div>
            <div class="h-screen wrapper bg-slider-2">  </div>
        </div>


            <div class=" h-screen w-4/12 flex-col justify-center pl-10 flex overflow-hidden ml-24 wrap-sub-title absolute">
                <h3 class=" uppercase text-2xl text-white font-bold">agriculture durable</h3>
                <p class="text-white py-4">
                    AGRO-MAP est une entreprise qui développe les projets de
                    durabilité dans les domaines agricole, foresterie,
                    environnement et dans l'économie rurale
                </p>
            </div>

    </header>
    ---->
<!--------------------Section a propos de nous------------------------->
    <section class="py-12 overflow-hidden">
        <div class="relative">
            <span class="text-center absolute top-0 w-full block  uppercase p-0 -mt-24  font-raleway" style="font-size:30em; opacity: 0.07; color:#209e2e;">agro</span>
            <div class="px-6 lg:px-20">
                <div class="agro_propos pt-24 z-10">
                    <div class="">
                        <i class="font-rubik-light  -mb-2 block font-black uppercase text-sm" style="color:#209e2e;">nous connaître</i>
                        <h1 class="font-raleway font-black uppercase" style="font-size:2.8em;">agro-map</h1>
                        <p class="uppercase font-rubik-light font-hairline text-gray-600 text-3xl">
                            développe les projets de  durabilité
                        </p>
                        <a href="{{route('a-propos')}}" class="wow animated slideInUp inline-block font-rubik px-6 py-2 border-2 my-16" style="border-color:#0742F2; border-radius:50px;">en savoir plus</a>
                    </div>
                    <div class="">
                        <img src="{{asset('images/plante.png')}}" class="mx-auto wow animated zoomIn">
                    </div>
                    <div class="">
                        <h4 class="font-rubik py-6 text-gray-600 text-2xl">
                            agro-map est une société dont la mission est de promouvoir
                            des pratiques agricoles durables pour lutter contre le changement climatique.
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-6 sm:px-16 lg:px-24 mt-10 lg:mt-32">
            <div class="bg-banner-about" style="height:260px ">
            </div>
            <div class="sm:flex flex-wrap justify-between bg-white shadow-lg rounded-br-lg rounded-bl-lg p-10">
                <div class="sm:w-1/2 text-center lg:w-1/4">
                        <p class="text-6xl font-black" style="color:#209e2e;">10400</p>
                        <h4 class="text-xl text-gray-600 ">Parcelles cartographiées</h4>
                    </div>
                <div class="sm:w-1/2 text-center lg:w-1/4">
                        <p class="text-6xl font-black" style="color:#209e2e;">8000</p>
                        <h4 class="text-xl text-gray-600 ">Producteurs visités</h4>
                    </div>
                <div class="sm:w-1/2 text-center lg:w-1/4">
                        <p class="text-6xl font-black" style="color:#209e2e;">5</p>
                        <h4 class="text-xl text-gray-600 " >Années d'experience</h4>
                    </div>
                <div class="sm:w-1/2 text-center lg:w-1/4">
                        <p class="text-6xl font-black"style="color:#209e2e;">15</p>
                        <h4 class="text-xl text-gray-600 ">Employés</h4>
                    </div>
            </div>
        </div>
    </section>
<!--------------------Section nos services------------------------->
<section class="md:container md:mx-auto px-6 sm:px-16 lg:px-24 py-10 lg:pt-16 lg:pb-24">

    <div class="agro-service  md:flex flex-wrap">
        <div class="agro-service-title w-full lg:w-3/6 overflow-hidden">
            <h4 class="font-raleway font-black uppercase " style="font-size:2.5em;color:#0742F2;">Nos Services</h4>
            <p class="text-lg text-gray-600 font-rubik">
                AGRO-MAP est une entreprise qui développe <br> les projets de
                durabilité dans les domaines
            </p>
            <a href="{{route('services.index')}}" class="wow animated slideInUp text-gray-600 inline-block font-rubik px-6 py-2 border-2 my-16" style="border-color:#0742F2; border-radius:50px;">voir nos services</a>
        </div>
        <div class="agro-block-service w-full lg:w-3/6 lg:p-3 py-3 overflow-hidden">
            <a style="outline: none">
                <div class="wow animated slideInRight bg-services-1 py-10" style="background:url('images/forest-agri.jpg')no-repeat; background-size:cover;">
                    <h4 class=" font-raleway text-center py-24 font-black text-white uppercase" style="font-size:2em;">
                        foresterie & environnement
                    </h4>
                </div>
            </a>
        </div>
        <div class="agro-block-service w-full lg:w-6/12 lg:p-3 py-3  overflow-hidden">
            <a  style="outline: none">
                <div class=" wow animated slideInLeft bg-services-2 py-10" style="background:url('images/digit-agri.jpg')no-repeat; background-size:cover;">
                    <h4 class=" font-raleway text-center py-24 font-black text-white uppercase" style="font-size:2em;">
                        digitalisation agricole
                    </h4>
                </div>
            </a>

        </div>
        <div class="agro-block-service w-full lg:w-3/12 lg:p-3 py-3 overflow-hidden">
            <a  style="outline: none">
                <div class="wow animated slideInUp bg-services-3 py-10" style="background:url('images/geo-agri.jpg')no-repeat; background-size:cover;">
                    <h4 class=" font-raleway text-center py-24 font-black text-white uppercase" style="font-size:2em;">
                        geomatique
                    </h4>
                </div>
            </a>
        </div>
        <div class="agro-block-service w-full  lg:w-3/12 lg:p-3 py-3 overflow-hidden">
            <a style="outline: none">
                <div class="wow animated slideInDown bg-services-4 py-10" style="background:url('images/durab-agri.jpg')no-repeat; background-size:cover;">
                    <h4 class=" font-raleway text-center py-16 font-black text-white uppercase" style="font-size:2em;">
                        agriculture durable
                    </h4>
                </div>
            </a>
        </div>
    </div>

</section>

<!--------------------Section nos fillières------------------------->
    <section class="bg-filliere relative overflow-hidden">
        <h2 class="text-center font-raleway  text-4xl md:text-6xl font-extrabold pt-24 uppercase text-white">nos filieres</h2>
        <div class="sm:flex justify-center items-center flex-wrap px-8 lg:px-24 h-full pb-32 pt-8">
            <div class="w-full sm:w-1/2 py-4 lg:w-1/4 relative ">
                <img src="{{asset('images/fillier.png')}}" style="width:225px;" class="mx-auto">
                <div class="body-text-filliere absolute">
                    <img src="{{asset('images/1.png')}}" class="wow animated zoomIn mx-auto pb-3" style="width:60px; margin-top:-1em;" >
                    <span class="wow animated zoomIn font-extrabold text-lg capitalize" style="color:#209e2e;">café</span>
                    <span class="wow animated zoomIn text-lg">/</span>
                    <span class="wow animated zoomIn font-extrabold text-lg capitalize" style="color:#209e2e;">cacao</span>
                </div>
            </div>
            <div class="w-full sm:w-1/2 py-4 lg:w-1/4 relative">
                <img src="{{asset('images/fillier.png')}}" style="width:225px;" class="mx-auto">
                <div class="body-text-filliere absolute">
                    <img src="{{asset('images/2.png')}}" class="wow animated zoomIn mx-auto pb-3" style="width:60px; margin-top:-1em;" >
                    <span class="wow animated zoomIn font-extrabold text-lg capitalize" style="color:#209e2e;">palmier</span>
                    <span class="text-lg wow animated zoomIn">/</span>
                    <span class="wow animated zoomIn font-extrabold text-lg capitalize" style="color:#209e2e;">hévéa</span>
                </div>
            </div>
            <div class="w-full sm:w-1/2 py-4 lg:w-1/4 relative ">
                <img src="{{asset('images/fillier.png')}}" style="width:225px;" class="mx-auto">
                <div class="body-text-filliere absolute top-0 text-center  overflow-hidden">
                    <img src="{{asset('images/3.png')}}" class="wow animated zoomIn mx-auto pb-3" style="width:60px; margin-top:-1em;" >
                    <span class="wow animated zoomIn font-extrabold text-lg capitalize wow animated zoomIn" style="color:#209e2e;">coton</span>
                    <span class="text-lg wow animated zoomIn">/</span>
                    <span class=" font-extrabold text-lg capitalize wow animated zoomIn" style="color:#209e2e;">anarcade</span>
                </div>
            </div>
            <div class="w-full sm:w-1/2 py-4 lg:w-1/4 relative">
                <img src="{{asset('images/fillier.png')}}" style="width:225px;" class="mx-auto">
                <div class="body-text-filliere absolute top-0">
                    <img src="{{asset('images/4.png')}}" class="wow animated zoomIn mx-auto pb-3" style="width:60px; margin-top:-1em;" >
                    <span class="wow animated zoomIn font-extrabold text-lg text-center capitalize" style="color:#209e2e;">cultures vivriers</span>
                </div>
            </div>
        </div>
    </section>

<!--------------------Section nos partenaires------------------------->
    <section class="px-6 lg:px-24 bg-gray-100 py-24 relative">
        <h4 class="text-center font-raleway text-4xl md:text-6xl pb-6" style="color:#0742F2;">{{__('ils nous font confiance')}}</h4>
        <div class="partner-slider w-full lg:flex overflow-hidden">

                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img class="mx-auto" src="{{asset('images/dronek.jpg')}}">
                    </div>
                </div>
                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img class="mx-auto" src="{{asset('images/cemoi.jpg')}}">
                    </div>
                </div>
                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img class="mx-auto" src="{{asset('images/icoon.jpg')}}">
                    </div>
                </div>
                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img class="mx-auto" src="{{asset('images/ecotierra.jpg')}}">
                    </div>
                </div>
                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img src="{{asset('images/reforestaction.jpg')}}">
                    </div>
                </div>
                <div class="w-full lg:w-1/4 p-3">
                    <div class="border-8 border-gray-500 p-10 bg-white">
                        <img class="mx-auto" src="{{asset('images/impactum.jpg')}}">
                    </div>
                </div>

        </div>
        <div class="controls-slider w-full">
            <div class="prev absolute w-10  flex justify-center items-center text-2xl h-10 rounded-full" ><button class="bg-transparent outline-none "><i class=" feather-chevron-left"></i></button></div>
            <div class="next absolute w-10  flex justify-center items-center text-2xl h-10 rounded-full"><button class="bg-transparent outline-none "><i class=" feather-chevron-right"></i></button></div>
        </div>
    </section>
@endsection
