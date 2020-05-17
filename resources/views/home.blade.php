@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16 font-rubik text-gray-600">
    <div class="w-full py-6 px-6 font-rubik text-gray-600">
        <h2 class="text-xl inline px-1">{{ __('Tableau de bord') }}</h2>
    </div>
    <div class="flex flex-wrap px-6">

        <div class=" w-full bg-white rounded py-3 px-6" style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
            <div>
                <h3 class="text-2xl">{{__("Bienvenue sur votre espacce d'administration ")}}</h3>
                <p>{{__("voici quelques liens pour aider à demarrer ")}}</p>
            </div>
            <div class="flex pb-6">
                <div class="w-5/12">
                    <h4 class="font-black tex-3xl py-6 font-rubik-bold font-semibold capitalize text-base py-2">
                        {{__(" lancez-vous")}}
                    </h4>
                    <a href="{{route('/')}}" class="text-white rounded-sm py-3 px-6" style="background:#0742f2;">
                        <i class="feather-eye"></i><span class="ml-2">{{ __('Afficher votre site') }}</span></a>
                </div>
                <div class="w-7/12">
                    <h4 class="font-black tex-3xl py-6 font-rubik-bold font-semibold text-base py-2">
                        {{__("  Etape à suivre")}}
                    </h4>
                    <h4 class="font-black text-base">
                        <i class="feather-grid"></i><a href="{{route('admin.categories.index')}}"><span class="ml-2">{{ __('Ajoutez des catégories à vos articles') }}</span></a>
                    </h4>
                    <h4 class="font-black text-base py-2">
                        <i class="feather-edit-3"></i><a href="{{route('admin.posts.create')}}"><span class="ml-2">{{ __('Créez votre premier article') }}</span></a>
                    </h4>


                </div>
            </div>
        </div>

        <div class="w-3/12 pr-3 pt-6 pb-3">
            <div style="box-shadow: 0 0 12px rgba(0,0,0,.5);">
                <div class=" w-full rounded-lg py-6 px-4 bg-categorie">
                    <div class="flex items-center justify-between">
                        <h4 class=" font-raleway uppercase text-sm ">  {{ __('catégories') }}  </h4>
                        <i class="feather-grid"style="color:#f2b705"></i>
                    </div>
                    <div class="mb-1 font-rubik-bold font-semibold">
                        <span class="text-6xl">{{$categories->count()}}</span>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

        </div>

        <div class="w-3/12 px-3 pt-6 pb-3">
            <div style="box-shadow:  0 0 12px rgba(0,0,0,.5);">
                <div class=" w-full rounded-lg py-6 px-4 bg-post">
                <div class="flex items-center justify-between">
                        <h4 class=" font-raleway uppercase text-sm ">  {{ __('articles') }}  </h4>
                        <i class="feather-layers"style="color:#f22929"></i>
                </div>
                    <div class="mb-1 font-rubik-bold font-semibold">
                    <span class="text-6xl">{{$posts->count()}}</span>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="w-3/12 px-3 pt-6 pb-3">
            <div style="box-shadow:  0 0 12px rgba(0,0,0,.5);">
                <div class=" w-full  rounded-lg pt-6 pb-10 px-4 bg-time">
                    <div class="flex items-center justify-between">
                        <h4 class=" font-raleway uppercase text-sm ">  {{ __('heure') }}  </h4>
                        <i class="feather-clock" style="color: #00b8a5;"></i>
                    </div>
                    <div class="mb-1 font-rubik-bold font-semibold">
                        <span id="h" class="text-4xl" data-heure ="">{{now()->format('H')}} :</span>
                        <span id="m" class="text-4xl" data-minutes>{{now()->format('i')}} :</span>
                        <span id="s" class="text-4xl" data-secondes>{{now()->format('s')}}</span>
                        <br>
                        <br>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="w-3/12 pl-3 pt-6 pb-3">
            <div style="box-shadow:  0 0 12px rgba(0,0,0,.5);">
                <div class=" w-full rounded-lg pt-6 px-4 bg-day relative">
                    <div class="flex items-center justify-between">
                        <h4 class=" font-raleway uppercase text-sm ">  {{ __('date') }}  </h4>
                        <i class="feather-calendar" style="color: #0742f2;"></i>
                    </div>
                    <div class="text-center text-5xl font-rubik-light font-semibold">
                        <span class="text-center block  capitalize">{{$day}} {{now()->format('d')}}</span>
                        <span class="block -mt-6 capitalize">{{$month}}</span>
                        <span class="block -mt-5">{{now()->format('Y')}}</span>

                    </div>
                </div>
            </div>
        </div>

        <!-------------------le listing de catégories ---------------------->
        <div class="w-8/12 py-3 pr-3">
            <div class=" w-full bg-white rounded py-3  " style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                <div class="flex justify-between items-center pb-3 px-4 border-gray-300 border-b">
                   <div class="w-1/2 flex items-center">
                        <i class=" feather-list"></i>
                        <h4 class="font-black text-base ml-2">
                                {{ __('liste des articles') }}
                        </h4>
                   </div>
                   <div class="w-1/2 flex justify-end">
                        <i class=" feather-more-vertical"></i>
                   </div>
                </div>
                @foreach ($posts as $post)
                <div class="w-auto flex px-6 py-3">

                        <div class="w-1/12">{{$post->id}}</div>
                        <div class="w-1/12">
                            <img src="{{asset('imgposts/'. $post->image )}}" width="30" style="box-shadow: 0 5px 10px 0 rgba(50,50,50,.15);">
                        </div>
                        <div class="w-4/12">{!!$post->title!!}</div>
                        <div class="w-6/12">{!! Str::words($post->content, 10, '...') !!}</div>

                </div>
                @endforeach
            </div>
        </div>

        <div class="w-4/12 py-3 pl-3">
            <div class=" w-full bg-white rounded py-3  " style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                <div class="flex justify-between items-center pb-3 px-4 border-gray-300 border-b">
                   <div class="w-1/2 flex items-center">
                        <i class=" feather-list"></i>
                        <h4 class="font-black text-base ml-2">
                            {{ __('liste des articles') }}
                        </h4>
                   </div>
                   <div class="w-1/2 flex justify-end">
                        <i class=" feather-more-vertical"></i>
                   </div>
                </div>
                @foreach ($categories as $category)
                <div class="w-auto flex px-6 py-3">

                        <div class="w-1/12">{{$category->id}}</div>
                        <div class="w-1/12">
                            <i class=" feather-circle"></i>
                        </div>
                        <div class="w-4/12">{!! $category->name !!}</div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
