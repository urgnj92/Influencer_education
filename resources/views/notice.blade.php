<!-- 岡田上さん作成の管理者用ヘッダーにのちに変更する -->
<head>
    <title>お知らせ</title>
</head>
@extends('layouts.header')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('../resources/sass/notice.css') }}">

@section('content')

<div class="back"><a href="#" onclick="history.back(); return false;">←戻る</a></div>

<body>
    <div class="main">
        <h2 class="title">お知らせ</h2>
            <div class="container">
                @foreach($articles as $article)
                    <div class="date">{{ $article->posted_date->format('Y年m月d日') }}</div>
                    <div class="notice_title"><h1>{{ $article->title }}</div>
                    <div class="article">{{ $article->article_contents }}</div>
                @endforeach
            </div>
    </div>
</body>
@endsection

