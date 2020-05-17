@extends('layouts.default')

@section('content')

<!--header nos services-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-agri-forest" style="height: 500px;">
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
                        <h2 class="capitalize text-4xl text-gray-800 font-raleway" style="color:#209e2e; ">foresterie & environnement</h2>
                        <span class="h-2 w-10  inline-block"  style="background:#0742F2;"></span>
                        <span class="inline-block border  float-right py-1 px-6 text-center text-gray-600"  style="border-color:#209e2e; border-radius:2em;"> nos services</span>                        
                    </div>

                    <div class="py-16 font-rubik">
                        <img src="{{url('images/forest-agri.jpg')}}">

                        <p class="text-gray-600 py-6 ">
                            Nous sommes engagés dans la promotion des pratiques agricoles respecteuses 
                            de l’environnement, conservatrice de la biodiversité, de préservation des 
                            ressources naturelles et protection des aires protégées. Notre demarche 
                            s’inscrit dans la sensibilisation des potentiels acteurs, la formation et 
                            le caoching des communautés sur les thematiques en rapport avec le volet 
                            socio-economique et environnemental, notamment la promotion d’une approche
                            agroforestière resilient et souple, en préconisant les espèces à croissance rapide qui permettent de diversifier les revenus des agriculteurs.
                        </p>
                        <p class="text-gray-600 py-6">
                            AGRO-MAP se focalise sur la valorisation et la promotion des initiatives
                            paysannes en matière des systèmes agroforestièrs durables pour freiner
                            l’agriculture extensive sur brulis qui ont déjà atteint leurs limites 
                            socio-économiques et environnementales. Nous encadrons les communautés
                            pour produire des plants de pépinières des arbres forestiers et frutiers 
                            et nous les accompagnons jusqu’au planting dans les plantations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

