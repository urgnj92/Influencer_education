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
			<ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
																			onclick="event.preventDefault();
																			document.getElementById('logout-form').submit();">
																			{{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
		</div>
	</header>
    
	<main>
		@yield('content')
	</main>
	@yield('script')
</body>
</html>