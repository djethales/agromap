@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16">
    <div class="w-full py-6 px-6 font-rubik text-gray-600">
        <h2 class="text-xl inline px-1">{{ __('Liste des utilisateurs') }}</h2>
        <a href="{{route('admin.users.create')}}" class="btn border border-blue-500 py-2 px-5  rounded">Ajoutez</a>
    </div>
    <div class="px-2">
        <div class="w-8/12 py-1 px-4 ">
            <div class="bg-white rounded" style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                @foreach ($users as $user)
                <div class='w-full flex flex-wrap justify-between items-center py-3 px-6 text-gray-600'>
                    <div class=w-1/12>
                        
                                {{$user->id}}
                    </div>
                    <div class=w-1/12><img src="{{asset('images/user.png')}}" class='mx-auto h-10 w-10 rounded-full'style="box-shadow: 0 5px 10px 0 rgba(50,50,50,.15);"></div>

                    <div class='w-5/12 capitalize'><span class="uppercase">{{$user->name}}</span> {{$user->username}}<br><span class="text-sm font-rubik-light italic" style="color: #0742f2">{{$user->email}}</span></div>
                    <div class='w-2/12'>{{implode('',$user->roles()->get()->pluck('name')->toArray())}}</div>
                    <div class='w-2/12'>{{$user->created_at->format('d/m/Y')}}</div>
                    <div class='w-1/12 flex justify-end items-center relative btn-action'>
                        <ul class="">
                            <li>
                                <i class="feather-more-vertical cursor-pointer"></i>
                                <ul class="has-action absolute bg-white block py-4 hidden" style="width:170px; top:-1.5em; right:-10.5em;box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                                    <li class=" p-1"><a class="pl-8" href="{{route('admin.users.edit',['user' => $user])}}"><i class="feather-edit-3 px-2"></i>{{__('edit')}}</a></li>
                                    <li class="p-1 hidden"><a class="pl-8 " href="{{route('admin.users.show',['user' => $user->id])}}"><i class="feather-eye px-2"></i>{{__('profile')}}</a></li>
                                    <li class="p-1">
                                        <form method="POST" action="{{ route('admin.users.destroy',['user'=>$user->id]) }}" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="" id ="delete-{{$user->id}}"  data-id ="{{$user->id}}" data-name = {{$user->name}} class="deleted outline-none appearance-none" style="color:#F22929;">
                                                <i class="feather-trash-2 px-2"></i> {{ __('Supprimer') }}
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                           
                        
                    </div>
                </div>
                    

                @endforeach
            </div>
            <div class="py-3 flex justify-end">
                <span class="text-gray-600 font-rubik text-right">{{__('Total utilisateur') .$value .": "}} {{$users->count()}}</span> 
            </div>
            
        </div>
    </div>
</div> 
@endsection
