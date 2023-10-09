@extends('layouts.loginHeader')

@section('css')
    <link rel="stylesheet" href="../resources/css/login.css">
@endsection

@section('title')
    <title>Login</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{ __('translation.Login') }}</h1>

               <!-- @error('email')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ __('translation.Login Error') }}</strong>
                    </div>
                @enderror-->

                <div class="error-message">
                    <strong class="mail-must">メールアドレスは入力必須項目です</strong>
                    <strong class="mail-length">メールアドレスは50文字以内で入力してください</strong>
                    <strong class="password-must">パスワードは入力必須項目です</strong>
                    <strong class="password-length">パスワードは6～30文字以内で入力してください</strong>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('translation.E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="mailInput form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" maxlength="30" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end passwordInput">{{ __('translation.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="passwordInput form-control @error('password') is-invalid @enderror" name="password" minlength="6" maxlength="30" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row mb-3 hidden">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('translation.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="{{ __('translation.Login') }}" class="btn btn-primary">
                                    
                                

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('translation.Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection