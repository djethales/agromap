@extends('layouts.default')

@section('content')

<!--header nos services-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-agri-dura" style="height: 500px;">
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
                        <h2 class="capitalize text-4xl text-gray-800 font-raleway" style="color:#209e2e; ">agriculture durable </h2>
                        <span class="h-2 w-10  inline-block"  style="background:#0742F2;"></span>
                        <span class="inline-block border  float-right py-1 px-6 text-center text-gray-600"  style="border-color:#209e2e; border-radius:2em;"> nos services</span>                        
                    </div>

                    <div class="py-16 font-rubik">
                        <img src="{{url('images/durab-agri.jpg')}}">

                        <p class="text-gray-600 py-6">
                            L’agriculture durable vise à transformer la vie des producteurs de sorte qu’ils aient
                            une vision d’entrepreneur moderne. Notre demarche de professionalisation s’articule 
                            autour de trois points fondamentaux :
                        </p>

                        <ul>
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    La première est la réalisation d’un état des lieux (Diagnostic),
                                    axé sur l’approche compréhensive.
                                </span> 
                            </li>  

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">
                                    La deuxième vise à identifier les orientations de diversification 
                                    des activités du producteur et de coaching de proximité pour l’aider
                                    à realiser son objectif.
                                </span> 
                            </li>
                            
                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                      La troisième consiste à faire un accompagnement regulier
                                      dans la prise en compte des enjeux sociaux et environnementaux .
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    Professionnalisation des acteurs agricoles
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    Conception et mise en oeuvre des programmes et projets de durabilité
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    Audit des sociétés et coopératives agricoles
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    Business Développement
                                </span> 
                            </li>

                            <li class="py-2">
                                <i class="font-black feather-check-square inline-block" style="color:#209e2e;"></i>
                                <span class="pl-3 text-gray-600 ">  
                                    Formation des producteurs sur les Bonnes Pratiques Agricoles(BPA).
                                </span> 
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

