@extends('layouts.app')

@section('content')


<div class="title"> 
        <h1>パスワード変更</h1>
    </div>

    <div class="form_group">
        <label for="old_password">旧パスワード</div>
            <div>
                <textarea name="old_password"></textarea>
            </div>

        <label for="new_password">新パスワード</div>
            <div>
                <textarea name="new_password"></textarea>
            </div>
        
        <label for="check_new_password">新パスワード確認</div>

            <div>
                <textarea name="check_new_password"></textarea>
            </div>

    </div>

                <button type="button" class="btn btn-primary" onclick="location.href=()">{{ __('登録') }}</button>

@endsection