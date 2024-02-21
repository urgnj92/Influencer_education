<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('../resources/sass/header.css') }}">
	<title>test</title>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('head')
</head>
<body>
	<header>
		<div id="header-contents">
			<nav>
				<ul class="header-nav">
					<li id="setList"><button type="button" class="btn btn-primary" onclick="#">時間割</li><!--リンクはそれぞれの担当者が指定したルートに変更-->
					<li id="classProgress"><button type="button" class="btn btn-primary" onclick="location.href='{{ route('curriculum_progress') }}'">授業進捗</button></li><!--リンクはそれぞれの担当者が指定したルートに変更-->
					<li id="profileSettings"><button type="button" class="btn btn-primary" onclick="#">プロフィール設定</li><!--リンクはそれぞれの担当者が指定したルートに変更-->
				</ul>
			</nav>
			<div class="navbar-nav ms-auto">
				<!-- Authentication Links -->
				<div class="logout-item">
					<a class="logout-link" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('translation.Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</div>
		</div>
	</header>
    
	
		@yield('content')
	
	@yield('script')
</body>
</html>