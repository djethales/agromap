@extends('layouts.default')

@section('content')

<!--header nos services-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-agri-digit" style="height: 500px;">
        <div class="absolute opacity-50 bg-black w-full left-0 top-0 bottom-0 right-0"></div>
    </div>
    <div class="brand-title relative">
        <span></span>
        <div class=" rounded-full p-1 flex justify-center items-center">
            <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
</div>
   
</header>

    <section class=" pt-56">
        <div class="px-6   lg:container lg:mx-auto lg:px-8 ">
            <div class=" flex flex-col items-center">
                <div class=" md:w-8/12 lg:w-6/12 ">
                    <div class="border border-dashed w-full py-8 px-5 lg:p-10" style="border-color:#209e2e; border-radius:1em;">
                        <h2 class="capitalize text-4xl text-gray-800 font-raleway" style="color:#209e2e; ">digitalisation agricole </h2>
                        <span class="h-2 w-10  inline-block"  style="background:#0742F2;"></span>
                        <span class="inline-block border  float-right py-1 px-6 text-center text-gray-600"  style="border-color:#209e2e; border-radius:2em;"> nos services</span>                        
                    </div>

                    <div class="py-16 font-rubik">
                        <img src="{{url('images/digit-agri.jpg')}}">

                        <p class="text-gray-600 pt-6 pb-2">
                            {{
                                __("
                                La transformation d’une agriculture performante implique nécessairement 
                                la mise en place des technologies numériques accessibles et adaptées aux 
                                conditions de vie des producteurs. Nous mettons en place des plates-formes
                                multi-acteurs technologiques et des applications (AgriColect) permettant 
                                aux acteurs du secteur agricole de communiquer sur les performances des 
                                filières agricoles.
                                ")
                            }}
                            
                        </p>
                        <p class="text-gray-600 py-2">
                            {{
                                __("
                                Dans cette perspective, AGRO-MAP a développé 
                                un logiciel de traçabilité dénommé «CocoaTrace » 
                                disponible pour ces clients pour répondre aux enjeux de 
                                la maitrise de la chaine d’approvisionnement des de produits 
                                agricoles..
                             ")
                            }}
                        </p>

                       
                        

                        <ul>
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    {{
                                        __('
                                        Mise en place des plateformes technologiues Multi-acteurs
                                    ')
                                }}
                                </span> 
                            </li>  

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    {{
                                        __('
                                        Conception de logiciels de traçabilité en ON/OFFLINE
                                    ')
                                }}
                                </span> 
                            </li>
                            
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 "> 
                                    {{
                                        __(" 
                                        Développement des applications
                                    ")
                                }}
                                </span> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

