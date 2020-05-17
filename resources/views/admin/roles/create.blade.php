@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16 font-rubik text-gray-600">
    <div class="w-full px-6 pt-2">
        <h2 class="text-2xl">{{ __('Roles') }}</h2>
    </div>
    <div class="flex px-4">
        <div class="w-4/12 py-1 pl-4">
            <h4 class="font-black text-base pt-8">{{ __('Ajouter un nouveau role') }}</h4>
            <form method="POST" action="{{ route('admin.roles.store') }}">
                @csrf
                <div class="py-2">
                    <label class="block py-1"> {{ __('nom ') }}</label>
                    <input type="text" name="name" value="{{old('name')}}" class="@error('name') border border-red-500 @enderror block w-full py-1 px-3 rounded border-gray-300 border">
                    <span class="block text-sm py-1">{{ __('Nom du role') }} </span>
                </div>
                
                <div class="py-2">
                    <button type="submit" class="bg-blue-500 rounded py-2 px-4 text-sm text-white">
                        {{ __('Ajouter un nouveau roles') }}
                    </button>
                </div>
            </form>
                
                
        </div>
    </div>
</div> 
@endsection
