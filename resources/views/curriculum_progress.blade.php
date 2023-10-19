@extends('layouts.app')

@section('content')

<div><a href="#" onclick="history.back(); return false;">←戻る</a></div>


<div class="image">
    <img src=”ここに画像URLを設定” alt="No Image" style="max-width: 100px;">
</div>

<div class="profile">
    @foreach($users as $user)
    <div class="user_progress">
        <!-- 選択したユーザーの情報を表示させる -->
        {{ $user->name }}さんの授業進捗
    </div>
    @endforeach

@foreach($grades as $key => $grade)
    @if($key === 0)
    <div class="present_grade">
        現在の学年：{{ $grade->name }}
    </div>
    @endif
</div>


    <!-- <div class="container"> -->
<div class="flex-box">
    <div class="main">    
        <div class="grade">
            <p>{{ $grade->name }}</p>
            <!-- 授業名をidで管理し「受講済」アイコンを表示 -->
            <table id="progress-table">
            <!-- この項目は非表示 -->
                <thread>
                    <tr>
                        <th hidden>id</th>
                        <th hidden>subject_title</th>
                    </tr>
                </thread>
            <!-- curriculumテーブルから対応する学年のタイトルを取得して表示 -->
                    @foreach($curriculums as $curriculum)
                    @if ($curriculum->classes_id == $grade->id)
                <tbody>
                    <tr>
                        <td></td>
                        <td>{{ $curriculum->title }}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endforeach

@endsection
