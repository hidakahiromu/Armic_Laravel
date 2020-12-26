<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Armic</title>
  <link rel="stylesheet" href="css/toppage.css">
  <meta name="description" content="Armic 音楽サイト">
  <meta http-equiv="X-UA=Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
</head>

<body>
  <header>
    <nav class="o">
      <ul class="header_list1">
        <li><a>
            <nobr>ARMICについて</nobr>
          </a></li>
        <li><a>
            <nobr>投稿ページ</nobr>
          </a></li>
        <li><a>
            <nobr>アティスト一覧</nobr>
          </a></li>
      </ul>
    </nav>
    <h1 class="header_logo"><a href="Home.html" 　title="Homeへ">
        <img src="armic.png" width="200" height="arto"></a>
    </h1>
    <ul class="header_list2">
      <form method="get" action="#" class="search_container">
        <input type="text" size="25" placeholder="キーワード検索">
        <input type="submit" value="&#xf002">
      </form>
      <p></p>
      <li><a>
          <nobr>イベント</nobr>
        </a></li>
      <li><a>
          <nobr>ニュース</nobr>
        </a></li>
       <!--ログイン-->
        <!-- ログインしていないゲスト画面の時の表示-->
        @guest
        <li class="nav-item">
        <nobr><a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a></nobr>
        </li>
        <!--ゲストここまで -->
            @else
            <!--ログインした後のユーザーネーム表示とマウスカーソルでログアウト表示-->
            <li><nobr><a href="#">{{ Auth::user()->name }}<span>▼</span></a></nobr>
                <ul>
                <li><nobr><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                               </a></nobr></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                               </form>
                          <ul>
                        
                    </li>
                  <!--ログアウトここまで-->
                @endguest
            </li>
      <!-- ログイン機能ここまで-->
    </ul>
  </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer>
    <div class="footer-logo"><a href=""><img src="armic-logo.png" alt=""></a></div>
    <div class="about-list">
      <li><a href="">Q&A</a></li>
      <li><a href="">お問い合わせ</a></li>
      <li><a href="">利用規約</a></li>
    </div>
    <div class="login-list">
      <li><a href="">ログイン</a></li>
      <li><a href="">マイページ</a></li>
    </div>
    <div class="footer-other"><small>© 2020 Armic</small></div>
  </footer>
</body>

</html>