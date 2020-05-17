@extends('layouts.default')

@section('content')

    <!--header contact-->
    <header class="relative w-full">
        <div class="relative w-full overflow-hidden bg-contact" style="height: 500px;">
        </div>
        <div class="brand-title relative">
           <span class=""></span>
           <div class=" rounded-full p-1 flex justify-center items-center">
            <img src="{{asset('images/logo.png')}}">
        </div>
        </div>
    </div>
       

    <div class="lg:px-16 mt-5 py-16 px-6">
        <div class=" flex flex-wrap justify-around font-rubik">
            

            <div class="w-full sm:w-1/2 md:w-1/3">
                <div class="mx-3 px-6 py-12 md:px-8 md:mx-2 lg:mx-4 lg:px-8 text-gray-600 rounded-lg shadow-lg relative flex items-center flex-col">
                    <div class="w-16 h-16 rounded-full border border-dashed mb-8 flex justify-center items-center" style="border-color:#209e2e;"> 
                        <i class="feather feather-mail text-2xl" style="color: #0742F2"></i>
                    </div>
                    <p class=" pb-8">info@agro-map.com</p> 
                    <div class="absolute px-10 py-3 tip-rounded rounded-sm"style="background: #0742F2">
                        <span class="text-white">E-mail</span>    
                    </div>               
                </div>               
            </div>

            <div class="w-full sm:w-1/2 md:w-1/3">
                <div class="m-3 px-6 py-12 md:px-8 md:mx-2 lg:mx-4 lg:px-8 text-gray-600 rounded-lg shadow-lg relative flex items-center flex-col">
                    <div class="w-16 h-16 rounded-full border border-dashed  mb-8 flex justify-center items-center" style="border-color:#209e2e;"> 
                        <i class="feather feather-phone text-2xl" style="color: #0742F2"></i>
                    </div>
                    <p>( +225 ) 09 50 24 81</p>
                    <p>( +225 ) 05 01 30 36</p>
                    <div class="absolute rounded-sm text-white px-10 py-3 tip-rounded" style="background: #0742F2">
                        Téléphone
                    </div>
                </div>
            </div>

            <div class=" w-full sm:w-1/2 md:w-1/3">
                <div class="m-3 px-6 py-12 md:px-8 md:mx-2 lg:mx-4 lg:px-8 text-gray-600 rounded-lg shadow-lg relative flex items-center flex-col">
                    <div class="w-16 h-16 rounded-full border-dashed border mb-8 flex justify-center items-center" style="border-color:#209e2e;"> 
                        <i class="feather feather-map text-2xl" style="color: #0742F2"></i>
                    </div>
                    <p class="">
                        Abidjan, Cocody, II Plateaux Angré 7<sup>e</sup> Tranche<br>
                        <em>Immeuble Klaihoua, Rue L155 (Côte d'Ivoire)</em>
                    </p>
                    
                    <div class="absolute text-white rounded-sm px-10 py-3 tip-rounded" style="background: #0742F2;">
                        Adresse
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <section class="py-20">
        <div id="map" >
            <div class="google-map">                    
                <iframe class="w-full h-screen" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.194467393645!2d-3.989091785735894!3d5.387304136822532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc19325b80f8ab7%3A0xd2e901d2194f1231!2sAGRO-MAP!5e0!3m2!1sfr!2sci!4v1578477221808!5m2!1sfr!2sci"></iframe>
                              
            
            </div>
        </div>
    </section>
    <div class="py-16">
        <div class="flex justify-center items-center">
            <div class="w-10/12">
            <form action="{{route('contact')}}" method="POST" class="flex flex-wrap">  
                @csrf    
                        <div class="w-full md:flex">
                        <input class="w-full md:w-1/2 py-6 px-8 rounded-sm my-3 md:mr-4 border border-dashed text-gray-600 font-rubik text-xl" name="name" placeholder="Nom" style="border-color:#209e2e;" value="{{old("name")}}">
                            <input class="w-full md:w-1/2 py-6 px-8 rounded-sm  my-3 md:ml-4 border border-dashed text-gray-600 font-rubik text-xl" name="email" placeholder="Email" style="border-color:#209e2e;" value="{{old("email")}}">
                        </div>            
                        
                        <div class="w-full md:flex">
                            <input class="w-full md:w-1/2 py-6 px-8 rounded-sm  my-3 md:mr-4 border border-dashed text-gray-600 font-rubik text-xl" name="phone" placeholder="Numéro téléphone" style="border-color:#209e2e;"value="{{old("phone")}}">                      
                            <input class="w-full md:w-1/2 py-6 px-8 rounded-sm  my-3 md:ml-4 border border-dashed text-gray-600 font-rubik text-xl" name="subjet" placeholder="objet" style="border-color:#209e2e;" value="{{old("subjet")}}">
                        </div> 
                       
                        
                        <div class="w-full">
                            <textarea class="w-full rounded-sm  my-3 border border-dashed text-gray-600 font-rubik text-xl" name="message" rows="10" style="border-color:#209e2e;"value="{{old("message")}}">  </textarea>
                        </div>        
                        
                        <button class="py-3 px-10  text-white text-lg font-rubik rounded-sm" style="background: #0742F2;">Envoyez message</button>
                </form>
            </div>
        </div>
    </div>

@endsection