<div class="">
    <div class="py-6">
        <img src="{{asset('images/brand.png')}}" width="150" class="mx-auto">
    </div>
    <div class="pt-3 pb-5 text-center text-white px-3">
    <img src="{{asset('images/user.png')}}" width="70" class="mx-auto">
    </div>
    <nav class="">
        <ul class="flex flex-col font-rubik" style="color:#5e676f;">
            <li class="pb-3">
                <div class="flex justify-between items-center bg-gray-200 py-2 px-6 cursor-pointer ">
                    <i class=" feather-airplay text-base" style="color:#f22929"></i><span class="">{{ __('Tableau de bord') }}</span><i class=" feather-chevron-down "></i>
                </div>
                <ul class="pt-2">
                    <li>
                        <span></span><a href="{{ route('home') }}">{{ __('Accueil') }}</a>                </li>
                    <li>
                        <span></span><a  href="{{ route('/') }}">{{ __('Aller sur le site') }}</a>
                    </li>
                </ul>
                
            </li>
            <li class="pb-3">
                <div class="flex justify-between items-center bg-gray-200 py-2 px-6 cursor-pointer ">
                    <i class=" feather-layers text-base" style="color:#0742F2"></i><span class="">{{ __('Articles') }}</span><i class=" feather-chevron-down "></i>
                </div>
                <ul class="pt-2">
                    <li >
                        <span></span><a href="{{ route('admin.posts.index') }}">{{ __('Tous les articles') }}</a>                </li>
                    <li>
                        <span></span><a  href="{{ route('admin.posts.create') }}">{{ __('Ajouter') }}</a>
                    </li>
                    <li>
                        <span></span><a  href="{{ route('admin.categories.index') }}">{{ __('Catégories') }}</a>
                    </li>
                </ul>
                
            </li>
            
        
            <li class="">
                <div class="flex bg-gray-200 py-2 justify-between items-center px-6 cursor-pointer">
                    <i class=" feather-users text-base" style="color:#209e2e"></i><span>{{ __('Utilisateurs') }}</span> <i class=" feather-chevron-down"></i>
                </div>
               <ul class="pt-2">
                <li>
                    <span></span><a  href="{{ route('admin.users.index') }}">{{ __('Utilisateurs') }}</a>
                </li>
                
                <li>
                    <span></span><a  href="{{ route('admin.users.create') }}">{{ __('Ajouter') }}</a>
                </li>
               </ul>
            </li>
        </ul>
    </nav>
</div>