@extends('layouts.app')

@section('content')
    <div class="w-full">

        <div class="flex justify-center items-center">
            <div class="rounded border border-primary shadow border mt-16 w-1/3">

                <div class="flex flex-col">
                    <div class="text-primary text-3xl uppercase text-center p-8">
                        {{config('app.name')}}
                    </div>

                    <div class="p-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="flex flex-col">
                                <label for="email" class="text-xs text-primary">{{ __('E-Mail Address') }}</label>

                                <input id="email"
                                       name="email"
                                       type="email"
                                       class="mt-2 input-text outline-none {{ $errors->has('email') ? ' border-primary-action' : '' }}"
                                       value="{{ old('email') }}"
                                       placeholder="{{ __('E-Mail Address') }}"
                                       autofocus>

                                @if ($errors->has('email'))
                                    <p class="text-xs text-primary-action mt-1">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                            </div>

                            <div class="flex flex-col mt-4">
                                <label for="password" class="text-xs text-primary">{{ __('Password') }}</label>

                                <input id="password"
                                       type="password"
                                       class="mt-2 input-text outline-none {{ $errors->has('password') ? ' border-primary-action' : '' }}"
                                       name="password"
                                       placeholder="{{ __('Password') }}">

                                @if ($errors->has('password'))
                                    <p class="text-xs text-primary-action mt-1">
                                        {{ $errors->first('password') }}
                                    </p>
                                @endif
                            </div>

                            <div class="flex flex-row mt-2">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-grey-lightest text-xs ml-2" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="flex flex-col items-center mt-8 ">
                                <button type="submit" class="btn btn-primary w-full">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn text-primary mt-4" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
