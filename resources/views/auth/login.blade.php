@extends('layouts.master-auth')

@section('main_menu')
@endsection

@section('content')
<div class="hero-body">
    <div class="container has-text-centered">
        <div class="columns is-vcentered">
            <div class="column is-4 is-offset-4">
                <div class="title has-text-grey">{{ __('Login') }}</div>

                <div class="box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <div class="control">

                                <p class="control has-icons-left has-icons-right">
                                    <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{__('Email Address') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="is-danger invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">

                                <p class="control has-icons-left has-icons-right">
                                    <input id="password" type="password" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="password" value="{{ old('password') }}" placeholder="{{__('Password') }}" required>

                                    @if ($errors->has('password'))
                                    <span class="is-danger invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </p>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-text-centered">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="button is-block is-info is-large is-fullwidth">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <p class="has-text-grey">
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
