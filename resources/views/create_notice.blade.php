<!-- 岡田上さん作成の管理者用ヘッダーにのちに変更する -->
<head>
    <title>お知らせ変更</title>
</head>
@extends('layouts.header')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('../resources/sass/notice_admin_update.css') }}">

@section('content')
<form action="{{ route('notice_admin')}}" method="post">

@csrf
<div class="back"><a href="#" onclick="history.back(); return false;">←戻る</a></div>    

<body>
    <div class="main">
    <h2 class="title">お知らせ新規登録</h2>
        <div id="body" class="wrapper">
            @foreach($articles as $article)
            <div class="item">
                <label for="date">投稿日時</label>
                <input type="text" name="posted_date" id="date" value=""></input>
            </div>

            <div class="item">
                <label for="title">タイトル</label>
                <input type="text" name="notice_title" id="title" value=""></input>
            </div>
        
            <div class="item">
                <label for="message">本文</label>
                <textarea name="comment" value=""></textarea>
            </div>
            @endforeach
        </div>

    <div class="button">
        <button type="button" class="btn btn-primary" onclick="window.location='{{ route('notice_admin') }}'">{{ __('登録') }}</button>
    </div>

    </div>
</body>
    @endsection

