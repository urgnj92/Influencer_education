@extends('layouts.app')

@section('content')

<div><a href="#" onclick="history.back(); return false;">←戻る</a></div>

<div class="head"> 
    <div class="articles_list">お知らせ一覧</div>
    <button type="button" class="btn btn-primary" onclick="location.href=()">{{ __('新規登録') }}</button>
</div>

<div class="body">
    <table id="table" class="articles_table">
        <thead>
            <tr>
                <th>投稿日時</th>
                <th>タイトル</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <!-- 投稿日時とお知らせタイトルはデータテーブルから引っ張ってくる -->
            <td>{{ $article->posted_date }}</td>
            <td>{{ $article->title }}</td>
            
            <td><button type="button" class="btn btn-primary" onclick="location.href='{{ route('notice_admin_update', $article->id) }}'">
            {{ __('変更する') }}</button></td>

            @csrf
            <!-- onclickでモーダルを表示させる -->
            <td><button type="button" class="btn btn-danger" >{{ __('削除') }}</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    
@endsection