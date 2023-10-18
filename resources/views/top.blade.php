@extends('layouts.header')
@section('head')
<link rel="stylesheet" href="../resources/css/top.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
@section('content')
<div id="main-container">
    <div id="banner">
        <div class="banner-image">
            @foreach($banners as $banner)
            <img class="slide" src="{{ asset($banner -> image) }}" alt="" value="img-{{$classCount}}" data-count="{{$classCount}}">
            @php $classCount ++ @endphp
            @endforeach
            @php $classCount = 1 @endphp
        </div>
        <div class="image-icon">
            <ul>
                @for($i=0; $i<$count; $i++)
                <li class="bannersBtn li-{{$classCount}}" value="img-{{$classCount}}"></li>
                @php $classCount++ @endphp
                @endfor                
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