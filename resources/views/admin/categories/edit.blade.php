@extends('layouts.app')

@section('content')

<div class="container mx-auto px-8 pt-16 font-rubik text-gray-600">
    <div class="w-full">
        <h2 class="text-2xl ">{{ __('Catégories') }}</h2>
    </div>
    <div class="flex">
        <div class="w-6/12 py-1 pl-4">
            <h4 class="font-black text-base py-8">{{ __('Modifiez la catégorie') }}</h4>
            <form  method="POST" action="{{route('admin.categories.update',$category)}}">
                @method('PATCH')
                @csrf

                <div class="">
                    <table class=" w-full font-rubik text-gray-600">
                        <tbody>
                            <tr>
                                <td><label class="block -mt-8"> {{ __('nom') }}</label></td>
                                <td class="px-10 py-4">
                                     <input type="text" name="name" value="{{$category->name}}" class="@error('name') border border-red-500 @enderror w-full py-1 px-3 rounded border-gray-300 border capitalize">
                                    <span class="block text-sm py-1">{{ __('Nom de la catégorie') }} </span>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="block -mt-8"> {{ __('slug') }}</label></td>
                                <td class="px-10 py-4">
                                    <input type="text" name="slug" value="{{$category->slug}}" class="@error('slug') border border-red-500 @enderror block w-full py-1 px-3 rounded border-gray-300 border capitalize">
                                    <span class="block text-sm py-1">{{ __('URL de la catégorie composé de lettre de miniscule de chiffre') }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="block -mt-8"></label></td>
                                <td class="px-10 py-4">
                                    <div class="py-2">
                                        <button type="submit" class="bg-blue-500 rounded py-2 px-4 text-sm text-white">
                                            {{ __('mettre à jour') }}
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-----
                <div class="py-2">
                    <label class=""> {{ __('descrption') }}</label>
                    <textarea type="text" name="name"  class="block w-full py-1 px-2 rounded-lg border-gray-300 border" rows="7">
                        {{old('description')}}
                    </textarea>
                    <span class="block">{{ __('Description de la catégorie') }} </span>
                </div>
                ---->
               
            </form>
                
                
        </div>
    </div>
</div> 
@endsection