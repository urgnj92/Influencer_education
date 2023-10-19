@extends('layouts.app')

@section('content')

<div><a href="#" onclick="history.back(); return false;">←戻る</a></div>

<!-- ユーザーが選択したお知らせ１つを表示させる　今の状態だとデータ全部表示されてる -->
<div class="body">
    @foreach($articles as $article)

    <div class="date">{{ $article->posted_date }}</div>

    <div class="notice_title">{{ $article->title }}</div>

    <div class="body">{{ $article->article_contents }}</div>
    @endforeach
</div>

@endsection

