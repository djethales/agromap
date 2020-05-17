<div
    class="navbar_area left-0 right-0 w-full transition duration-100 ease-in h-auto bg-transparent ">
    <div class="navbar lg:px-10 lg:mx-1 xl:px-24 xl:mx-6 in-nav ">
        <div class="navbar_menu px-4 py-2 bg-white shadow-xl rounded-lg">
            <div class="flex-wrap item-center justify-between">
                <!---brand logo -->
                <div class="flex justify-between items-center">
                    <a href="{{route('/')}}" class=" inline-block -mt-4 outline-none"><img
                            src="{{asset('images/brand.png')}}" width="150"></a>

                    <button class="flex justify-end items-center btn-mobile">
                        <i class=" feather-menu text-2xl"></i>
                    </button>
                </div>

                <nav class="nav_menu hide">
                    <ul class="item-center justify-between text-gray-600  capitalize text-base font-rubik">

                        <li class="relative">
                            <a href="{{route('/')}}" class="block outline-none xl:px-4 py-6 px-2"> {{__('accueil')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                        </li>
                        <li class="relative">
                            <a href="{{route('a-propos')}}" class="block outline-none outline-none xl:px-4  py-6 px-2">
                                {{__('qui sommes-nous?')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                        </li>
                        <li class="relative">
                            <a href="{{route('nos-services')}}" class="block outline-none xl:px-4  py-6 px-2">
                                {{__('services')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                            <div class="sub_nav_menu hidden bg-white mt-2 px-2 lg:p-4 left-0">
                                <ul class="flex flex-col block justify-center ">
                                    <li class="py-1"><a>foresterie & environnement</a></li>
                                    <li class="py-1"><a>agriculture durable</a></li>
                                    <li class="py-1"><a>digitalisation agricole</a></li>
                                    <li class="py-1"><a>géomatique</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="relative">
                            <a href="{{route('nos-fillieres')}}"
                                class="block outline-none xl:px-4  py-6 px-2">{{__('fillières')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                            <div class="sub_nav_menu hidden bg-white mt-2 px-2 lg:p-4 left-0">
                                <ul class="flex flex-col">
                                    <li class="py-1 "><a>café/cacao</a></li>
                                    <li class="py-1"><a>palmier/hévéa</a></li>
                                    <li class="py-1"><a>coton/arnacade</a></li>
                                    <li class="py-1"><a>cultures vivrières</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="relative">
                            <a href="{{route('nos-projets')}}"
                                class="block outline-none xl:px-4  py-6 px-2">{{__('projets')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                        </li>
                        <li class="relative">
                            <a href="{{route('contact')}}"
                                class="block outline-none  py-6 px-2">{{__('Contactez-nous')}}</a>
                            <span class="mx-auto w-2 rounded-full h-2 block absolute"
                                style="background:#209e2e;"></span>
                        </li>
                    </ul>
                </nav>



                <div class="">
                    <!---main menu navigation   <a href="{{route('login')}}"class="block p-4">Se connecter</a>---->
                </div>

            </div>
        </div>
    </div>
</div>