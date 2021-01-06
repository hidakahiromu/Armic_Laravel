<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ARMIC</title>
  <link rel="stylesheet" href="css/app.blade.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <link rel="icon" type="image/x-icon" href="image/armicicon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="Armic 音楽サイト">
  <meta http-equiv="X-UA=Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <header>

    <div class="header-ul">
      <!--左の要素-->
      <ul class="header_list  ulul">
        <li><a>
            <nobr><a class="nav-link">ARMICについて</a></nobr>
          </a></li>
        <li><a href="/postmovie">
            <nobr>投稿ページ</nobr>
          </a></li>
        <li><a href="/artistlist">
            <nobr>アーティスト一覧</nobr>
          </a></li>
      </ul>
      <!--ロゴ-->
      <h1 class="header_logo"><a href="/" 　title="ARMIC">
          <img src="image/armic.png" width="200" height="68px"></a>
      </h1>
      <!--右の要素-->
      <ul class="header_list header_list2 ulul">
        <li><a class="#" href="/event">
            <nobr>{{ __('イベント') }}</nobr>
          </a></li>
        <li><a href="/#new">
            <nobr>{{ __('ニュース') }}</nobr>
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
        <li>
          <div><a href="#">{{ Auth::user()->name }}<span>▼</span></a></div>
          <ul class='ulul shadowrogout_ul'>
            <li class='shadowrogout_li'>
              <nobr><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a></nobr>
            </li>

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
    </div>
  </header>

  <main class="py-4">
    @yield('content')
  </main>

  <!--ページトップ-->
  <div id="page_top"><a href="#"></a></div>
  <footer id="footer" class="outer-block">
    <div class="inner-block">
      <div class="wrap">
        <div class="logo">

          <h1>ARMIC</h1>
          <p　class="sabu">
            <nobr>音楽を届けるサイト</nobr>
          </p>
        </div>


        <ul class="nav">
          <li>ご利用に際して</li>
          <li><a href="">Q&A</a></li>
          <li><a href="">利用規約</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="copyright">
      <p><small> © 2020 Armic</small></p>
    </div>
  </footer>
</body>

</html>