<!-- 岡田上さん作成の管理者用ヘッダーにのちに変更する -->
<head>
    <title>お知らせ一覧</title>
</head>
@extends('layouts.header')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('../resources/sass/notice_admin.css') }}">
@section('content')
<div class="back"><a href="#" onclick="history.back(); return false;">←戻る</a></div>
    
<body>
    <div class="main">
    <h2 class="title">お知らせ一覧</h2>
        <div>
            <button type="button" class="btn btn-primary" onclick="window.location=('create_notice')">{{ __('新規登録') }}</button>
        </div>

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
                <td>{{ ($article->posted_date) }}</td>
                <td>{{ $article->title }}</td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ route('notice_admin_update', $article->id) }}'">{{ __('変更する') }}</button>
                </td>

                    @csrf
                    <!-- onclickでモーダルを表示させる -->
                    <td><button type="button" class="btn btn-danger" >{{ __('削除') }}</button></td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</body>    
@endsection