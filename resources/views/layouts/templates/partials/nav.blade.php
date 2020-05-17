<!--navigation top-->
<div class="{{Request::is('login') ? 'hidden' : ''}} navbar__area w-full" data-navbar-area>
    <div class="lg:container px-8 lg:mx-auto lg:px-10 xl:px-24 xl:mx-6 " data-nav-area>
        <div class="bg-white shadow-xl rounded-lg px-4" data-nav-menu>
            <div class="control-nav">

                <div class="flex justify-between items-center">
                    <a href="{{route('/')}}" class=" inline-block -mt-3 outline-none"><img src="{{asset('images/brand.png')}}" width="150"></a>
                    <button class="flex justify-end items-center btn-mobile" style="color:#409e2e;"><i class="feather-menu text-2xl"></i></button>
                </div>
                <nav class="navbar__menu hide">
                    <ul class="text-gray-600  capitalize text-base font-rubik">
                        <li>
                            <a href="{{route('/')}}" class="outline-none py-1 px-2 inline-block">{{__('accueil')}}</a>
                        </li>
                        <li>
                            <a href="{{route('a-propos')}}" class="outline-none py-2 px-2 inline-block">{{__('qui sommes-nous?')}}</a>
                        </li>
                        <li>
                            <a href="{{route('services.index')}}" class="outline-none py-1 px-2 inline-block">{{__('services')}} <!---i class="feather-chevron-down"></i------></a>
                           <!------
                            <div class="relative">
                                <ul class="bg-white z-10 px-3"  style="width:20rem;left:-100px;">
                                    <li class="py-1 pl-3"><a href="{{route('foresterie.environnement')}}" class="outline-none">{{__('foresterie & environnement')}}</a></li>
                                    <li class="py-1 pl-3"><a href="{{route('agriculture.durable')}}" class="outline-none">{{__('agriculture durable')}}</a></li>
                                    <li class="py-1 pl-3"><a href="{{route('digitalisation.agricole')}}" class="outline-none">{{__('digitalisation agricole')}}</a></li>
                                    <li class="py-1 pl-3"><a href="{{route('geomatique')}}" class="outline-none">{{__('géomatique')}}</a></li>
                                </ul>
                            </div>
                            ------->
                        </li>
                        <li>
                            <a href="{{route('nos-fillieres')}}" class="outline-none py-1 px-2 inline-block">{{__('fillières')}} <i class="feather-chevron-down"></i></a>
                            <div class="relative">
                                <ul class="bg-white z-10 px-3" style="width:20rem; left:-100px;">
                                    <li class="py-1 pl-3"><a>café/cacao</a></li>
                                    <li class="py-1 pl-3"><a>palmier/hévéa</a></li>
                                    <li class="py-1 pl-3"><a>coton/arnacade</a></li>
                                    <li class="py-1 pl-3"><a>cultures vivrières</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('projets.index')}}" class="py-1 px-2 inline-block">{{__('projets')}}</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="py-1 px-2 inline-block">{{__('contactez-nous')}}</a>
                        </li>
                    </ul>
                </nav>
                <div class="hidden md:block"></div>
            </div>
        </div>
    </div>
</div>
