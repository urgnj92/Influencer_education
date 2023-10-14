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
                    <img class="slide" src="../public/storage/images/linkedin-7341248_1280.jpg" alt="">
                </div>
                <div class="completion-btn">
                    <button>受講しました</button>
                </div>
            </div>
        
            <div id="curriculum">
                <div class="classes">小学１年生</div>
                <h1 class="title">授業タイトル</h1>
                <h4>講座内容</h4>
                <div class="notice-box">
                    <p class="description">
                        kokoo
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script src="../resources/js/delivery.js"></script>
@endsection