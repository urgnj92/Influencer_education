@extends('layouts.header')
@section('head')
<link rel="stylesheet" href="../resources/css/delivery.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
@section('content')
<div id="main-container">
    <div class="return">
        <a href="#">←戻る</a>
    </div>

    <div class="flex-box">
        <div id="main-contents">
            <div class="image-btn-box">
                <div class="banner-image">
                    <img class="slide" src="../public/storage/images/cosplay-5650215_1280.jpg" alt="">
                </div>
                <div class="completion-btn">
                    <button>受講しました</button>
                </div>
            </div>
        
            <div id="notice">
                <h2>お知らせ</h2>
                <div class="notice-box">
                    <ul>
                        <li>adsf</li>
                        <li>adsf</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script src="../resources/js/delivery.js"></script>
@endsection