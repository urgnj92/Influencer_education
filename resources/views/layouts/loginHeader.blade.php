<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../resources/css/loginHeader.css">
    @yield('css')
    @yield('title')
</head>
<body>
  <header>
    <div class="header-chenge">
        @if (Request::is('login'))
          <div class="chenge-item">
            <a class="chenge-link" href="{{ route('register') }}">{{ __('translation.RegisterPage') }}</a>
          </div>
        @endif

        @if (Request::is('register'))
          <div class="chenge-item">
            <a class="chenge-link" href="{{ route('login') }}">{{ __('translation.LoginPage') }}</a>
          </div>
        @endif
      </div>
  </header>

  <main>
    @yield('content')
  </main>
  @yield('script')
</body>
</html>