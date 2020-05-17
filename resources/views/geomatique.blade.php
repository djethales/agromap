@extends('layouts.default')

@section('content')

<!--header nos services-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-agri-geoma" style="height: 500px;">
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
                        <h2 class="capitalize text-4xl text-gray-800 font-raleway" style="color:#209e2e; ">géomatique </h2>
                        <span class="h-2 w-10  inline-block"  style="background:#0742F2;"></span>
                        <span class="inline-block border  float-right py-1 px-6 text-center text-gray-600"  style="border-color:#209e2e; border-radius:2em;"> nos services</span>                        
                    </div>

                    <div class="py-16 font-rubik">
                        <img src="{{url('images/geo-agri.jpg')}}">

                        <p class="text-gray-600 pt-6 pb-2">
                            {{
                                __('
                                    Nous réalisons des études sur la dynamique d’occupation du sol à travers
                                    les approches de télédétection (images satellitaires). Dans ces études, 
                                    nous associons l’identification des zones à haut valeur de conservation, 
                                    qui présentent une biodiversité remarquable. Ces études visent à établir
                                    les niveaux de référence de la couverture forestière et des ressources
                                    naturelles dans les zones des projets et des programmes afin d’élaborer 
                                    un plan d’affectation des terres agricoles pour les communautés bénéficiaires.
                                ')
                            }}
                            
                        </p>
                        <p class="text-gray-600 py-2">
                            {{
                                __('
                                Ces communautés sont formées à l’utilisation des outils géographiques,
                                notamment le Global Positionning System (GPS).
                             ')
                            }}
                        </p>

                        <p class="text-gray-600 py-2">
                            {{
                                __('
                            Notre démarche s’inscrit dans une approche de cartographie 
                            et de mapping participative des parcelles agricoles pour constituer 
                            des données. Les données des parcelles géo-référencées peuvent être 
                            utilisé pour la traçabilité des produits agricoles des producteurs 
                            de ces communautés.
                            ')
                        }}
                        </p>
                        

                        <ul>
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    {{
                                        __('
                                    Mapping (géolocalisation) des exploitations agricoles
                                    ')
                                }}
                                </span> 
                            </li>  

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    {{
                                        __('
                                    Cartographie participative
                                    ')
                                }}
                                </span> 
                            </li>
                            
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 "> 
                                    {{
                                        __(" 
                                    Télédétection et Système d'Information Géographique (SIG)
                                    ")
                                }}
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    {{
                                __("
                                    Dynamique spatiale des écosystèmes forestiers
                                    ")
                                }}
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    {{
                                        __("
                                    Formation des acteurs agricoles sur la Global Positionning System (GPS)
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

