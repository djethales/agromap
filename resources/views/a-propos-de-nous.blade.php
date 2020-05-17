@extends('layouts.default')

@section('content')

   <!--header apropos de nous-->
<header class="relative w-full">
    <div class="relative w-full overflow-hidden bg-slider-1" style="height: 500px;">
    </div>
    <div class="brand-title relative">
       <span class=""></span>
       <div class=" rounded-full p-1 flex justify-center items-center">
        <img src="{{asset('images/logo.png')}}">
    </div>
</div>
   
</header>
<section class="py-12 overflow-hidden px-6 ">
    <div class="relative">
        <span class="text-center absolute top-0 w-full block uppercase p-0 -mt-24  font-raleway" style="font-size:30em; opacity: 0.07; color:#209e2e;">agro</span>
        <div class="lg:px-6 lg:px-20">
            <div class="agro_propos  flex-wrap pt-24 z-10">
                <div class="">
                    <i class="font-rubik-light  -mb-2 block font-black uppercase text-sm" style="color:#209e2e;">nous connaître</i>
                    <h1 class="font-raleway font-black uppercase" style="font-size:2.8em;">agro-map</h1>
                    <p class="uppercase font-rubik-light font-hairline text-gray-600 text-3xl">  développe les projets de  durabilité
                    </p>
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
                <div class="sm:text-justify">
                    <p class="text-gray-600 py-1">
                        Nous réalisons des enquêtes terrains, des suivis des parcelles agricoles, formations et des coachings pour transformer la vision du producteur en un entrepreneur moderne. Ces informations permettent de faire un état des lieux complet des systèmes de production et de caractériser (caractérisations agronomiques et environnementales) les parcelles. 
                    </p>
                    <p class="text-gray-600 py-1">
                        Les enjeux environnementaux et sociaux sont au cœur de notre démarche. Nous soutenons les entreprises et les sociétés dans la mise en œuvre de leur politique de durabilité. AGRO-MAP dispose des pépinières des arbres forestiers et fruitiers destinés à promouvoir l’agroforesterie. L’objectif est de concilier l’agriculture et la forêt pour maintenir un micro-climat qui assure l’équilibre écosystémique des zones de production agricole. Pour ce faire, nous identifions les zones de haute valeur de conservation et d’intérêt biologique pour les communautés en mettant en place des plates-forme de compromis de gestion.
                    </p>
                    <p class="text-gray-600 py-1">
                        Nous utilisons des approches paysagères et parcellaires pour mettre en place des plans d’affectation des terres rurales qui contribuent à élaborer l’aménagement des territoires ruraux. A cet effet, AGRO-MAP accompagne régulièrement les producteurs, les sociétés coopératives, les particuliers et les entreprises agro-industrielles à identifier les bassins d’approvisionnement à travers la cartographie et le mapping des parcelles agricoles parcelles. L’objectif est de mettre en place un système de traçabilité performant et adapté aux conditions de production des acteurs.
                        Face aux enjeux d’une agriculture qui se veut moderne, nous utilisons des processus de digitalisation numérique pour collecter les informations en rapport avec l’exploitant et son exploitation agricole. AGRO-MAP offre des services utilisant de nouvelles technologies de l’information pour collecter des données sur le terrain (Smartphones, Android etc.). Elle conçoit des applications mobiles personnalisées et des logiciels de traçabilité pour moderniser la gestion et le traitement des données des entreprises et des sociétés agricoles.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:px-16 lg:px-24 mt-8">
        <div class="bg-banner-about" style="height:260px "></div>
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
    </div>
</section>
 <!------  

    <section class="pt-32 lg:px-20">
        <div class="px-8 md:container md:mx-auto md:px-4">           
            <div class="flex flex-wrap">
                <div class="w-full pb-10 md:w-1/2 md:px-4 md:pb-0 ">
                    <h5 class=" capitalize text-gray-600 -mb-4">nous connaître</h5>
                    <h2 class="text-6xl uppercase font-black pb-6" style="color:#0742F2;">
                        agro-map
                    </h2>
                    <p class="text-gray-600">
                        AGROMAP est une entreprise dont la mission est de promouvoir des pratiques agricoles durables pour lutter contre le changement climatique. Nous réalisons des enquêtes terrains, des suivis des parcelles agricoles, formations et des coachings pour transformer la vision du producteur en un entrepreneur moderne. Ces informations permettent de faire un état des lieux complet des systèmes de production et de caractériser (caractérisations agronomiques et environnementales) les parcelles.
                    </p>
                    <p class="text-gray-600">
                        Les enjeux environnementaux et sociaux sont au cœur de notre démarche. Nous soutenons les entreprises et les sociétés dans la mise en œuvre de leur politique de durabilité. AGRO-MAP dispose des pépinières des arbres forestiers et fruitiers destinés à promouvoir l’agroforesterie. L’objectif est de concilier l’agriculture et la forêt pour maintenir un micro-climat qui assure l’équilibre écosystémique des zones de production agricole. Pour ce faire, nous identifions les zones de haute valeur de conservation et d’intérêt biologique pour les communautés en mettant en place des plates-forme de compromis de gestion.
                    </p>
                    <p class="text-gray-600">
                        Nous utilisons des approches paysagères et parcellaires pour mettre en place des plans d’affectation des terres rurales qui contribuent à élaborer l’aménagement des territoires ruraux. A cet effet, AGRO-MAP accompagne régulièrement les producteurs, les sociétés coopératives, les particuliers et les entreprises agro-industrielles à identifier les bassins d’approvisionnement à travers la cartographie et le mapping des parcelles agricoles parcelles. L’objectif est de mettre en place un système de traçabilité performant et adapté aux conditions de production des acteurs.
                        Face aux enjeux d’une agriculture qui se veut moderne, nous utilisons des processus de digitalisation numérique pour collecter les informations en rapport avec l’exploitant et son exploitation agricole. AGRO-MAP offre des services utilisant de nouvelles technologies de l’information pour collecter des données sur le terrain (Smartphones, Android etc.). Elle conçoit des applications mobiles personnalisées et des logiciels de traçabilité pour moderniser la gestion et le traitement des données des entreprises et des sociétés agricoles.
                    </p>
                </div>
                <div class="w-full md:w-1/2 md:px-4">
                    <h5 class="text-xl font-extrabold py-8" style="color:#209e2e">
                        AGRO-MAP est une entreprise qui développe les projets de durabilité dans les domaines. 
                    </h5>
                    <div class="flex flex-wrap justify-between ">
                   
                        <div class="w-1/2 pr-4">
                            <img src="{{url('images/durab-agri.jpg')}}">
                            <div class="border-r border-b border-l border-dashed p-4" style="border-color:#0742F2;">        
                                 <h4 class="text-lg font-extrabold uppercase text-gray-600" >agriculture durable</h4> 
                            </div>
                        </div>
                        <div class="w-1/2 pl-4 ">
                            <img src="{{url('images/digit-agri.jpg')}}">
                            <div class="border-r border-b border-l border-green-300 border-dashed p-4" style="border-color:#0742F2;">        
                                 <h4 class="text-lg font-extrabold uppercase text-gray-600">digitalisation agricole</h4> 
                            </div>
                        </div>
                    </div>
                    <div class="lg:mt-16 mt-8 border rounded-lg p-6" style="border-color:#209e2e;">
                        <img src="{{asset('images/about.jpg')}}" class="rounded-lg">
                    </div>
                </div>

                <div class="w-full py-20 px-6">
                    <div class="bg-banner-about" style="height:260px "></div>
                        <div class="sm:flex flex-wrap justify-between  bg-white shadow-lg rounded-br-lg rounded-bl-lg p-10">
                            <div class="w-1/2 text-center md:w-1/4 ">
                                <p class="text-6xl font-black" style="color:#209e2e"><span class="counter">10400</span></p>
                                <h4 class="text-xl text-gray-600">Parcelles cartographiées</h4>
                            </div>
                            <div class="w-1/2 text-center md:w-1/4">
                                <p class="text-6xl font-black"style="color:#209e2e">8000</p>
                                <h4 class="text-xl text-gray-600">Producteurs visités</h4>
                            </div>
                            <div class="w-1/2 text-center md:w-1/4">
                                <p class="text-6xl font-black"style="color:#209e2e">5</p>
                                <h4 class="text-xl text-gray-600">Années d'experience</h4>
                            </div>
                            <div class="w-1/2 text-center md:w-1/4">
                                <p class="text-6xl font-black"style="color:#209e2e">15</p>
                                <h4 class="text-xl text-gray-600">Employés</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
------>
@endsection


