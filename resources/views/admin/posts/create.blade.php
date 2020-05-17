@extends('layouts.app')

@section('content')
    <div class="bg-marron" style="padding-top:3.5em;">
        <form method="POST" action="{{route('admin.posts.store')}}"  enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between">
                <div class="w-9/12">
                    <div class="px-8 h-full pt-10">
                        <input type="text" class="appearance-none focus:outline-none w-full px-4 py-4" name="title" value=" {{old('name')}}">
<!----
                    -->
                        <div class="py-6">
                            <textarea type="text" id="content" class="w-full bg-transparent" name="content" rows="10">
                                {{ old('content') }}
                            </textarea>
                        </div>
                    </div>
                
                </div>

                <div class="w-3/12 border-gray-200 border-l bg-white h-full">
                    <div class="w-full fixed p-3 bg-gray-300 text-gray-700 font-rubik font-bold text-sm">
                        {{__('Etat & visibilité')}}
                    </div>
                    <div class="w-full p-3 pt-16">
                        <ul>
                            <li class="flex justify-between py-3">
                                <span class="text-sm  text-gray-700 font-rubik font-bold">Visibilité</span>
                                <span class=" text-xs text-gray-600 font-rubik-light font-hairline">Public</span>
                            </li>
                            <li class="flex justify-between py-3">
                                <span class=" text-sm  text-gray-700 font-rubik font-bold">Publier</span>
                                <span class=" text-xs text-gray-600 font-rubik-light   font-hairline">{{now()->format('d-m-Y')}}</span>
                            </li>
                        </ul>
                        <div>
                            <button type="submit" class="bg-gray-300 border-2 rounded-lg w-full border-blue-500 text-base my-2 p-1">
                                {{ __('Publier') }}
                            </button>
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-rubik font-bold text-xl text-gray-700 pb-3">Catégories</h3> 
                        @foreach ($categories as $category)
                            <div class="form-group form-check">
                                <input id="{{$category->id}}" type="checkbox"
                                        class="form-check-input @error('categories') is-invalid @enderror"
                                        name="categories[]" value="{{$category->id}}">
                                <label for="{{$category->id}}" class="form-check-label text-gray-600 font-rubik-light text-base font-weight-bold"> {{$category->name}}</label>
                            </div>
                        @endforeach   
                    </div>
                    <div class="p-3">
                        <h3 class="font-rubik  text-xl text-gray-700 font-bold pb-3 ">Image a la une</h3>
                        <div class="w-full img-une relative">
                            <img src="{{asset('storage/uploads/default.png')}}">
                            <input type="file" id="upload-image" name="image"  class="hidden block w-full py-2 px-2 rounded-lg border-gray-300 border">
                        
                            <label for="upload-image" class="btn-postimg block w-10 h-10 bg-white flex justify-center cursor-pointer bg-red-600 items-center rounded-full shadow-lg">
                                <i class="feather feather-plus text-2xl text-blue-500 "></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
    </div>
@endsection

