
        <nav class="w-full fixed shadow-sm" style="z-index:1; background:#f5f5f6;">
            <div class="container mx-auto">
                <div class="py-3 ">
                    <!-- Right Side Of Navbar -->
                    <ul class="flex justify-end">
                        <!-- Authentication Links -->
                        <li class="relative" id="sub-nav">
                            <span class="block cursor-pointer w-10 h-10 bg-white uppercase flex justify-center items-center rounded-full" style="color:#0742e2;">
                                    {{substr(Auth::user()->name,0,1)}}
                            </span>
                            <ul class="sub-nav bg-white text-sm  rounded py-2 absolute" style="width:150px;top:52px; left:-70px; box-shadow: 0 1px 3px rgba(0,0,0,.05);" >
                                <li class="py-1 px-2">
                                   <span class="block"><strong class="uppercase">{{Auth::user()->name}}</strong> {{Auth::user()->username}}</span>
                                </li>
                                
                                <li class="py-1 px-2 border-gray-200 border-t">
                                    <a class="text-gray-600" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Se déconnecter') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>