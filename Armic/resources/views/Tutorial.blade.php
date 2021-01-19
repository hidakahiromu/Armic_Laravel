<head>
  <link rel="stylesheet" href="css/Tuto.css">
</head>
@extends('layouts.app')

@section('content')

<body>
  <header>

    <div class="header-ul">
      <!--左の要素-->
      <ul class="header_list">
        <li><a>
            <nobr>ARMICについて</nobr>
          </a></li>
        <li><a>
            <nobr>投稿ページ</nobr>
          </a></li>
        <li><a>
            <nobr>アーティスト一覧</nobr>
          </a></li>
      </ul>
      <!--ロゴ-->
      <h1 class="header_logo"><a href="Top_Page.html" 　title="ARMIC">
          <img src="armic__3_-removebg-preview.png" width="200" height="auto"></a>
      </h1>
      <!--右の要素-->
      <ul class="header_list">
        <li><a>
            <nobr>イベント</nobr>
          </a></li>
        <li><a href="#new">
            <nobr>ニュース</nobr>
          </a></li>
        <li><a href="Registration/Rogu.html">
            <nobr>ログイン</nobr>
          </a></li>
      </ul>
    </div>
  </header>

  <div class="box">
    <h2>[チュートリアル]</h2>
    <br>


    <h3>ゲストについて</h3>
    <dd>ログインをしなくても、あなたは音楽やアーティストに出会うことができます 。</dd>
    <dd>また音楽のニュースやイベント情報を手に入れることもできます。</dd>
    <dd></dd>
    <dd><strong>注)</strong>自分の音楽を配信したり、好きな音楽に評価やお気に入り登録をしたい場合はゲストのままでは出来ません。</dd>
    　　<br>
    <h3>ログインの方法</h3>
    <dd>まずはARMICにログインしましょう。<br>右上のログインボタンを押してください。</dd>
    <img src="tuto1.png" class="" width="200px">
    <dd>新規登録のボタンを押してください。</dd>
    <img src="tuto2.png" class="" width="200px">
    <dd>ユーザ名・メールアドレス・パスワードを設定しましょう。<br>最後に忘れずにチェックを入れましょう。</dd>
    <img src="tuto3.png" class="" width="200px">
    <dd>これであなたのログインは完了しました。</dd> <br>
    <h3>ログインユーザー</h3>
    <p>ログインユーザには機能が解放されます。</p>
    <h4>アーティスト登録による音楽の配信</h4>
    <h4>評価やお気に入りの追加</h4>
    <h4>イベント投稿</h4>
    <p>そのほかにも様々な機能がありますのでぜひ試してください。</p>


  </div>
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
@endsection