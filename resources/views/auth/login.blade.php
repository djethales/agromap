@extends('layouts.default')

@section('content')
<div class="container mx-auto px-6 sm:px-0">
    <div class="flex flex-col justify-center items-center lg:h-screen">
        <div class="w-full  sm:px-0 sm:w-8/12 lg:w-4/12 pb-8 md:py-0">
            <div class="py-4 lg:-mt-32"><img src="{{url('images/brand.png')}}" class="mx-auto"></div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col items-center">
                    <div class="w-full py-2 rounded-sm">
                        <label for="email" class=" inline-block py-4">{{ __('email') }}</label>
                        <div class="bg-gray-200  rounded-sm">
                            <input id="email" type="email" class="font-rubik w-full py-3 px-8 bg-transparent" name="email"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="w-full py-2 bg-white">
                        <label for="password" class=" py-4 inline-block">{{ __('Mot de passe') }}</label>

                        <div class="bg-gray-200 rounded-sm" >
                            <input id="password" type="password" name="password" class="font-rubik w-full py-3 px-8 bg-transparent">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!------------
                    <div class="w-full py-2">
                        <div class="">
                            <div class="form-check">
                                <input class="" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    --------->
                    <div class="w-full py-2">
                        <div class="">
                            <button type="submit" class="py-3 px-10 rounded-sm text-white" style="background:#0742F2;">
                                {{ __('Se connecter') }}
                            </button>
                            <!-----
                            @if (Route::has('password.request'))
                            <a class="pl-5 text-gray-600" href="{{ route('password.request') }}">
                                {{ __('mot de passe oublié ?') }}
                            </a>
                            @endif

                            --->
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

