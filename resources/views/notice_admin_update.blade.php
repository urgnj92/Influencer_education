@extends('layouts.app')

@section('content')


    <div class="title"> 
        <h1>お知らせ変更</h1>
    </div>

    <div class="form_group">
        <label for="date">投稿日時</div>
            <div>
                <textarea name="post_date"></textarea>
            </div>

        <label for="title">タイトル</div>
            <div>
                <textarea name="notice_title"></textarea>
            </div>
        
        <label for="message">本文</div>

            <div>
                <textarea name="notice_message"></textarea>
            </div>

    </div>

                <button type="button" class="btn btn-primary" onclick="location.href=()">{{ __('登録') }}</button>

    @endsection

