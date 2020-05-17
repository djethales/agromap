@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16 font-rubik text-gray-600">
    <div class="w-full px-6 pt-2">
        <h2 class="text-2xl">{{ __('Catégories') }}</h2>
    </div>
    <div class="flex px-4">
        <div class="w-4/12 py-1 pl-4">
            <h4 class="font-black text-base pt-8">{{ __('Ajouter une nouvel catégorie') }}</h4>
            <form method="POST" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="py-2">
                    <label class="block py-1"> {{ __('nom') }}</label>
                    <input type="text" name="name" value="{{old('name')}}" class="@error('name') border border-red-500 @enderror block w-full py-1 px-3 rounded border-gray-300 border">
                    <span class="block text-sm py-1">{{ __('Nom de la catégorie') }} </span>
                </div>

                <div class="py-2">
                    <label class="block py-1">{{ __('slug') }}</label>
                    <input type="text" name="slug" value="{{old('slug')}}" class="@error('slug') border border-red-500 @enderror block w-full py-1 px-3 rounded border-gray-300 border">
                    <span class="block text-sm py-1">{{ __('URL de la catégorie composé de lettre miniscule de chiffre') }}</span>
                </div>
    
                
                <div class="py-2">
                    <button type="submit" class="rounded py-2 px-4 text-sm text-white" style="background:#0742f2;">
                        {{ __('Ajouter une nouvel catégorie') }}
                    </button>
                </div>
            </form>
                
                
        </div>
        <div class="w-8/12 py-1 pl-10 pr-4 ">

            <div class="font-rubik text-gray-600 w-full bg-white rounded py-3  " style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                <div class="w-auto text-gray-900 capitalize flex justify-between items-center pb-3 px-4 border-gray-300 border-b">
                    <div class="w-1/12">n°</div>
                    <div class="w-5/12"> nom</div>                  
                    <div class="w-4/12 ">slug</div>
                    <div class="w-2/12 ">date</div>
                </div>
                @foreach ($categories as $category)
                    <div class="w-auto flex justify-between items-center px-6 py-3 text-sm capitalize">
                        <div class="w-1/12">{{$category->id}}</div>
                        <div class="w-5/12">{{$category->name}}</div>
                        <div class="w-5/12">{{$category->slug}}</div>
                        <div class="w-2/12 ">{{ $category->created_at->format('d/m/Y') }}</div>
                    </div>
                @endforeach  
            </div> 
            <div class="py-3 flex justify-end">
                <span class="text-gray-600 font-rubik text-right">{{__('Total des catégories: ') }} {{$categories->count()}}</span> 
            </div>
        </div>
    </div>
</div> 

<!---
      <div class="">
                <table class=" w-full font-rubik text-gray-600">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">{{ __('n°') }}</th>
                            <th class="px-4 py-2">{{ __('Nom ') }}</th>
                            <th class="px-4 py-2">{{ __('Slug ') }}</th>    
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-4 py-2 ">{{$category->id}}</td>
                                <td class="px-4 py-2 capitalize ">{{$category->name}}
                                    <div class="action font-rubik-light text-sm">
                                        <a href="{{route('admin.categories.edit',['category'=>$category->id])}}" style="color:#0742F2;">Editer</a>
                                        <span  class="px-1" >|</span> 
                                        <form method="POST" action="{{ route('admin.categories.destroy',['category'=>$category->id]) }}" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" id ="delete-{{$category->id}}"  onclick="supprimer({{$category->id}})" class="btn btn-danger appearance-none" style="color:#F22929;">
                                                {{ __('Supprimer') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-4 py-2">{{$category->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    --->
@endsection