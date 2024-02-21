<head>
    <title>授業進捗</title>
</head>
@extends('layouts.header')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('../resources/sass/curriculum.css') }}">

@section('content')

<div class="back"><a href="#" onclick="history.back(); return false;">←戻る</a></div>


<body>
    <div id="user_profile">
        <div class="image">
            <img src=”ここに画像URLを設定” alt="No Image" style="max-width: 100px;">
        </div>

        <div class="profile">
            @foreach($users as $user)
            <!-- 選択したユーザーの情報を表示させる -->
            <p>{{ $user->name }}さんの授業進捗</p>
            @endforeach

            @foreach($grades as $key => $grade)
            @if($key === 0)
            <p>現在の学年：{{ $grade->name }}</p>
            @endif
            @endforeach
        </div>
    </div>

    <div class=curriculum>
        @foreach($grades as $grade)
        <div class="grade">
            @if($grade->id >= 1 && $grade->id <= 6)
            {{-- 1から6までの範囲の処理 --}}
            <p class="first">{{ $grade->name }}</p>
                <ul>
                    @foreach($curriculums as $curriculum)
                    @if($curriculum->classes_id == $grade->id)
                    <li>{{ $curriculum->title }}</li>
                    @endif
                    @endforeach
                </ul>
            @endif

            @if($grade->id >= 7 && $grade->id <= 9)
            {{-- 7から9までの範囲の処理 --}}
            <p class="second">{{ $grade->name }}</p>
                <ul>
                    @foreach($curriculums as $curriculum)
                    @if($curriculum->classes_id == $grade->id)
                    <li>{{ $curriculum->title }}</li>
                    @endif
                    @endforeach
                </ul>
            @endif
                
            @if($grade->id >= 10 && $grade->id <= 12)
            {{-- 10から12までの範囲の処理 --}}
            <p class="third">{{ $grade->name }}</p>
                <ul>
                    @foreach($curriculums as $curriculum)
                    @if($curriculum->classes_id == $grade->id)
                    <li>{{ $curriculum->title }}</li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>
</body>


@endsection
