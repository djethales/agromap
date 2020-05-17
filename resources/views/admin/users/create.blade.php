@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16 font-rubik text-gray-600">
    <div class="w-full px-6 pt-2">
        <h2 class="text-2xl">{{ __('Ajoutez un utilisateur') }}</h2>
        <p class="text-sm py-2">{{ __('Créer un nouvel utilisateur et l’ajouter à ce site') }}</p>
    </div>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
       
        <div class="flex px-4">
            <div class="w-7/12 py-6 pl-4">
                <div class="">
                    <table class=" w-full font-rubik text-gray-600">
                        <tbody>
                            <tr>
                                <td class="py-4"> 
                                    <label class="block">{{ __('Nom') }}</label> 
                                </td>
                                <td class="py-4">
                                    <input type="text" class="rounded py-2 px-4 w-full @error('name') border border-red-500 @enderror" name="name" value="{{ old('name') }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">  <label class="block py-1">{{ __('Prénom') }}</label>   </td>
                                <td class="py-4">
                                    <input type="text" class="rounded py-2 px-4 w-full @error('username') border border-red-500 @enderror" name="username" value="{{ old('username') }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">  <label class="block py-1">{{ __('Email') }}</label>   </td>
                                <td class="py-4">
                                    <input type="text" class="rounded py-2 px-4 w-full @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">  <label class="block py-1">{{ __('Mot de passe') }}</label>   </td>
                                <td class="py-4">
                                    <input type="password" class="rounded py-2 px-4 w-full @error('password') border border-red-500 @enderror" name="password" value="{{ old('password') }}">

                                </td>
                            </tr>

                            <tr>
                                <td class="py-4">  <label class="block py-1">{{ __('Confirmez le mot de passe') }}</label>   </td>
                                <td class="py-4">
                                    <input type="password" class="rounded py-2 px-4 w-full @error('password') border border-red-500 @enderror" name="password_confirmation" value="{{ old('password') }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4">  
                                    <label class="block py-1">{{ __("Définir le role de l'utilisateur") }}
                                    </label> 
                                </td>
                                <td class="py-4">    
                                    @foreach ($roles as $role)
                                        <div class="py-2 capitalize">
                                            <input type="radio" name='role' value="{{$role->id}}" > 
                                            <span>{{$role->name}}</span>
                                        </div>
                                    @endforeach
                                </td>    
                                   
                                     
                                </td>
                                
                            </tr>
                            <tr>
                                <td> <button type="submit" class="py-2 px-6 rounded-sm text-white" style="background:#0742F2;">
                                    {{ __('créez un compte') }}
                                </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div> 
@endsection