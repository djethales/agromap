@extends('layouts.app')

@section('content')

<div class="container mx-auto pt-16">
    <div class="w-full py-6 px-6 font-rubik text-gray-600">
        <h2 class="text-xl inline px-1">{{ __('Articles') }}</h2>
        <a href="{{route('admin.posts.create')}}" class="btn border border-blue-500 py-2 px-5 capitalize rounded">{{__('ajoutez')}}</a>
    </div>
    <div class="px-2">

        <div class="w-full py-1 px-4 ">
            <div class="font-rubik text-gray-600 w-full bg-white rounded py-3" style="box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                <div class="w-auto text-gray-700   flex justify-between items-center pb-3 px-4 border-gray-300 border-b">
                    <div class="w-1/12">{{ __('n°')}}</div>
                    <div class="w-3/12 capitalize">{{ __(' titre')}}</div>
                    <div class="w-5/12 capitalize">{{ __('description')}}</div>
                    <div class="w-1/12 capitalize italic">{{ __('catégories')}}</div>
                    <div class="w-2/12  capitalize">{{ __('date')}}</div>
                </div>
                @foreach ($posts as $post)
                    <div class="w-auto flex justify-between items-center px-6 py-3 text-sm capitalize">
                        <div class="w-1/12">{{$post->id}}</div>
                        <div class="w-3/12 ">
                            <div class="flex items-center">
                                <img src="{{asset('imgposts/'. $post->image )}}" width="50" style="box-shadow: 0 5px 10px 0 rgba(50,50,50,.15);">
                                <span class="capitalize ml-3">{!!$post->title!!}</span>
                            </div>
                        </div>
                        <div class="w-5/12 px-3">

                            {!! Str::limit($post->content,150) !!}

                        </div>
                        <div class="w-1/12 italic">
                            {{implode('', $post->categories()->get()->pluck('name')->toArray())}}
                        </div>
                        <div class="w-2/12 flex justify-between items-center">
                            {{ $post->created_at->format('d/m/Y') }}
                            <div class='flex justify-end items-center relative btn-action'>
                                <ul class="">
                                    <li>
                                        <i class="feather-more-vertical cursor-pointer"></i>
                                        <ul class="has-action absolute bg-white block py-4 hidden" style="width:170px; top:-1.5em; right:40%;box-shadow: 0 1px 3px rgba(0,0,0,.05);">
                                            <li class=" p-1"><a class="pl-8" href="{{route('admin.posts.edit',$post->id)}}"><i class="feather-edit-3 px-2"></i>{{__('edit')}}</a></li>
                                            <li class="p-1">
                                                <form method="POST" action="{{ route('admin.posts.destroy',['post'=>$post->id]) }}" style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" type="button" id ="delete-{{$post->id}}"  data-name="{{$post->name}}" data-id="{{$post->id}}" class="deleted outline-none appearance-none" style="color:#F22929;">
                                                        <i class="feather-trash-2 px-2"></i> {{ __('Supprimer') }}
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="py-3 flex justify-end">
                <span class="text-gray-600 font-rubik text-right">{{__('Total des articles: ') }} {{$posts->count()}}</span>
            </div>
        </div>
    </div>
</div>
@endsection






