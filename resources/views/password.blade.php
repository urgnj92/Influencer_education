<head>
    <title>パスワード変更</title>
</head>
@extends('layouts.header')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('../resources/sass/password.css') }}">
<!-- script -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="{{ asset('js/user.js') }}"></script>
@section('content')

<div class="back"><a href="#" onclick="history.back(); return false;">←戻る</a></div>

<body>
    <form action="{{ route('password')}}" method="get" onsubmit="return validateForm()">
        <div class="main">
            <h1>パスワード変更</h1>
                <div class="container">
                    <div class="item">
                    <label for="oldPassword">旧パスワード</label>
                    <input type="text" id="oldPassword" name="old_password">
                    <div class="validation-message">
                        <span id="oldPasswordError" class="error"></span>
                    </div>
            </div>

            <div class="item">
                <label for="newPassword">新パスワード</label>
                    <input type="text" id="newPassword" name="new_password">
                    <div class="validation-message">
                        <span id="newPasswordError" class="error"></span>
                    </div>
            </div>
            
            <div class="item">
                <label for="submitPassword">新パスワード確認</label>
                    <input type="text" id="submitPassword" name="submit_password">
                    <div class="validation-message">
                        <span id="submitPasswordError" class="error"></span>
                    </div>
            </div>

        <div class="button">
            <button type="submit" class="btn btn-primary">{{ __('登録') }}</button>
        </div>
    </div>
    </form>
</body>

@endsection
