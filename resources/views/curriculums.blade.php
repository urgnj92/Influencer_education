@extends('layouts.header')
@section('head')
<link rel="stylesheet" href="../resources/css/curriculums.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
@section('content')
<div id="main-container">
    <div class="return">
        <a href="#">←戻る</a>
    </div>

    <div class="flex-box">
        <div id="main-contents">
            @foreach($curriculums as $curriculum)
            <div class="image-btn-box">
                <div class="banner-image">
                    <video class="slide" src="{{ $curriculum->video_url }}" alt="動画" controls muted>
                </div>
                <div class="completion-btn">
                    <form action="{{ route('curriculums') }}">
                        <input type="text" value="1" hidden>
                        <input class="button" type="submit" value="受講しました">
                    </form>
                </div>
            </div>
        
            <div id="curriculum">
                <div class="classes">{{ $curriculum->class_name }}</div>
                <h1 class="title">{{ $curriculum->title }}</h1>
                <h4>講座内容</h4>
                <div class="notice-box">
                    <p>カリキュラムの説明文がここに入る</p>    
                    <p class="description">
                        {{ $curriculum->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

@section('script')
<script src="../resources/js/delivery.js"></script>
@endsection