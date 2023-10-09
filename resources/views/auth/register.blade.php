@extends('layouts.loginHeader')

@section('css')
    <link rel="stylesheet" href="../resources/css/register.css">
@endsection

@section('title')
    <title>Register</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header">{{ __('translation.New Register') }}</h1>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('translation.Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" maxlength="20" required autocomplete="name" autofocus>
    
                                    @error('ユーザーネーム')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="name_kana" class="col-md-4 col-form-label text-md-end">{{ __('translation.Name Kana') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name_kana" type="text" class="form-control @error('name_kana') is-invalid @enderror" name="name_kana" value="{{ old('name_kana') }}" maxlength="20" required autocomplete="name" autofocus>
    
                                    @error('カナ')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('translation.E-Mail') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" maxlength="30" required autocomplete="email">
    
                                    @error('メールアドレス')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('translation.Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" minlength="6" maxlength="30" required autocomplete="new-password">
    
                                    @error('パスワード')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('translation.Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  minlength="6" maxlength="30" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <input type="hidden" value="1" name="classes_id">
    
                            <div class="mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('translation.Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



