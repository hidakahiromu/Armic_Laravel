<!DOCTYPE html>
<html>
<!--ヘッダー-->
<head>
  <meta charset="utf-8">
  <title>Armic</title>
  <link rel="stylesheet" href="css/toppage.css">
  <link rel="stylesheet" href="css/event.css">
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
      <h1 class="header_logo"><a href="../Top_page.html" 　title="Homeへ">
          <img src="armic.png" width="200" height="arto"></a>
      </h1>
      <ul class="header_list2">
        <form method="get" action="#" class="search_container">
          <input type="text" size="25" placeholder="キーワード検索">
          <input type="submit" value="&#xf002">
        </form>
        <p></p>
        <li><a href="{{ route('event') }}">
            <nobr>イベント</nobr>
          </a></li>
        <li><a>
            <nobr>ニュース</nobr>
          </a></li>
        <li><a>
            <nobr>ログイン</nobr>
          </a></li>
        </ul>
    </header>

    <!--イベント要素-->
    <div class="near_event">
      <h2 class="slider_ttl">開催間近のイベント</h2>
      <ul class="horizontal_scroll ">
        <li>
          <span class="nodesize">2021年1月20日開催</span>
          <a href=""><img src="armicicon.png" width="140px" height="80px"></a>
          <div class="drumname">
            <span><small>NEWS</small></span>
          </div>
        </li>
        <li>
          <span class="nodesize">2021年1月21日開催</span>
          <a href=""><img src="" width="140px" height="80px"></a>
          <div class="drumname">
            <span>LISA</span>
          </div>
        </li>
        <li>
          <span class="nodesize">2021年1月22日開催</span>
          <a href=""><img src="" width="140px" height="80px"></a>
          <div class="drumname">
            <span><small>米津玄師</small></span>
          </div>
        </li>
        <li>
          <span class="nodesize">2021年1月23日開催</span>
          <a href=""><img src="" width="140px" height="80px"></a>
          <div class="drumname">
            <span><small>あいみょん</small></span>
          </div>
        </li>
        <li>
          <span class="nodesize">2021年1月24日開催</span>
          <a href=""><img src="" width="140px" height="80px"></a>
          <div class="drumname">
            <span><small>aiko</small></span>
          </div>

        </li>
      </ul>
    </div>
    <!--イベント要素-->
    <li class="sbs"><h2 class="slider_ttl">新着イベント</h2>
    <!--イベント新規作成↓-->
    <div class="new_create"><a href="">新規作成</a> </div>
    </li>
    <!--イベント新規作成↑-->
    <div class="event_all">
      <div class="photo"><img src="" alt=""></div>
      <div class="details">
        <div class="category">
          <p>ライブ</p>
        </div>
        <div class=event_title>△△△△</div>
        <div class="date">主催 hidao 開催場所 △△　<br>開催日時 <span class="day">2021.01.01</span></div>
      </div>
      <div class="description">
        <h1></h1>
        <div class="text">
          <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している...</p>
          <a href="#0" class="">詳しく見る</a>
        </div>
      </div>
    </div>

    <div class="event_all">
      <div class="photo"><img src="" alt=""></div>
      <div class="details">
        <div class="category">
          <p>トーク</p>
        </div>
        <div class=event_title>〇〇〇〇</div>
        <div class="date">主催 LISA 開催場所 〇〇 開催日時 <span class="day">2021.01.21</span></div>
      </div>
      <div class="description">
        <h1></h1>
        <div class="text">
          <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している...</p>
          <a href="#0" class="">詳しく見る</a>
        </div>
      </div>
    </div>
    
    <!--イベント要素ここまで,これを下に並べる-->

<!--背景-->
<div class="bg_test">
    <div class="bg_test-text">
    </div>
  </div>
  　


<!--ページトップ-->
<div id="page_top"><a href="#"></a></div>
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