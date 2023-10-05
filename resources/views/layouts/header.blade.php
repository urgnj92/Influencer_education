<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>test</title>
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
		<link rel="stylesheet" href="../resources/css/header.css">
		@yield('head')

</head>
<body>
	<header>
		<div id="header-contents">
			<nav>
				<ul>
					<li id="setList"><a href="">時間割</a></li>
					<li id="classProgress"><a href="">授業進捗</a></li>
					<li id="profileSettings"><a href="">プロフィール設定</a></li>
				</ul>
			</nav>
			<div id="logout">
					<a href="">ログアウト</a>
			</div>
		</div>
	</header>
    
	<main>
		@yield('content')
	</main>
	@yield('script')
</body>
</html>