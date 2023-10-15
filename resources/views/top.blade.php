@extends('layouts.header')
@section('head')
<link rel="stylesheet" href="../resources/css/top.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
@section('content')
<div id="main-container">
    <div id="banner">
        <div class="banner-image">
            <img class="slide" src="../public/storage/images/cosplay-5650215_1280.jpg" alt="">
            <img class="slide" src="../public/storage/images/dr-strange-7251770_1280.jpg" alt="">
            <img class="slide" src="../public/storage/images/ironman-1049412_1280.jpg" alt="">
            <img class="slide" src="../public/storage/images/linkedin-7341248_1280.jpg" alt="">
        </div>
        <div class="image-icon">
            <ul>
                <li class="li1"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <div id="notice">
        <h2>お知らせ</h2>
        <div class="notice-box">
            <ul>
                @foreach($articles as $article)
                <li>
                    <a href="#">
                        {{ \Carbon\Carbon::parse($article->posted_date)->format('Y年m月d日') }}　　　　　{{ $article->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../resources/js/top.js"></script>
@endsection