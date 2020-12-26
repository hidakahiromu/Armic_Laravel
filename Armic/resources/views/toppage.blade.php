<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ARMIC</title>
  <link rel="stylesheet" href="css/toppage.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <link rel="icon" type="image/x-icon" href="image/armicicon.png">
  <meta name="description" content="Armic 音楽サイト">
  <meta http-equiv="X-UA=Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">  

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
            <nobr>アーティスト一覧</nobr>
          </a></li>
      </ul>
    </nav>
    <h1 class="header_logo"><a href="Home.html" 　title="Homeへ">
        <img src="image/armic.png" width="200" height="arto"></a>
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
      <li><a href="Registration/Rogu.html">
          <nobr>ログイン</nobr>
        </a></li>
    </ul>
  </header>
  <!--スライドショー-->
  <div class="slideshow">
    <input type="radio" name="slideshow" id="switch1" checked>
    <input type="radio" name="slideshow" id="switch2">
    <input type="radio" name="slideshow" id="switch3">
    <input type="radio" name="slideshow" id="switch4">
    <input type="radio" name="slideshow" id="switch5">
    <div class="slideContents">
      <section id="slide1">
        <img src="image/armic.png"> </section>
      <section id="slide2">
        <img src="image/armic.png">
      </section>
      <section id="slide3">
        <img src="image/armic.png">
      </section>
      <section id="slide4">
        <img src="image/armic.png">
      </section>
      <section id="slide5">
        <img src="image/armic.png"> </section>
    </div>
    <p class="arrow prev">
      <i class="ico"></i>
      <label for="switch1"></label>
      <label for="switch2"></label>
      <label for="switch3"></label>
      <label for="switch4"></label>
      <label for="switch5"></label>
    </p>
    <p class="arrow next">
      <i class="ico"></i>
      <label for="switch1"></label>
      <label for="switch2"></label>
      <label for="switch3"></label>
      <label for="switch4"></label>
      <label for="switch5"></label>
    </p>
  </div>
  <!--アイコン横並びスクロール-->
  <div class="rank">
    <h1 class="slider_ttl">人気投稿ランキング</h1>
    <ul class="horizontal_scroll rank">
      <li>
        <a href=""><img src="image/armicicon.png"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>NEWS</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="image/armicicon.png" width="140px" height="140px"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">LISA</span>
        </div>
      </li>
      <li>
        <a href=""><img src=""></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>米津玄師</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src=""></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>あいみょん</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src=""></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>aiko</small></span>
        </div>
      <li>
        <a href=""><img src=""></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">YOASOBI</span>
        </div>
      </li>
      </li>
      <!-- 以降、任意の数の<li></li>繰り返し -->
    </ul>
  </div>
  <!--背景-->
  <div class="bg_test">
    <div class="bg_test-text">
    </div>
  </div>
  　
  <!--ニュースバー-->
  　<h2>　　　ニュース</h2>
  　<ul class="msr_newslist01">
    <li>
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.12.01</time>
          <p class="cat01">cat01</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
    <li>
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.01.01</time>
          <p class="cat02">cat02</p>
        </div>
        <p> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト </p>
      </a>
    </li>
    <li>
      <a href="#">
        <div>
          <time datetime="2016-1-1">2019.09.01</time>
          <p class="cat01">cat01</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
    <li>
      <a href="#">
        <div>
          <time datetime="2016-1-1">2019.01.01</time>
          <p class="cat02">cat02</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
  </ul>
  　
  <!--イベントBOXidth="auto" height="200px"-->
  　
  　<h2>　　　イベント情報</h2>
  <div class="cp_card04">
    <div class="photo" ><img src="image/armic.png"alt="" width="auto" height="200px"></div>
    <div class="details">
      <div class="category">
        <p>初ライブ</p>
      </div>
      <div class="date"><span class="day">2021.01.01</span></div>
    </div>
    <div class="description">
      <h1>記事タイトル</h1>
      <div class="text">
        <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している...</p>
        <a href="#0" class="">詳しく見る</a>
      </div>
    </div>
  </div>
  <div class="cp_card04">
    <div class="photo"><img src="image/armic.png" alt=""></div>
    <div class="details">
      <div class="category">
        <p>トーク</p>
      </div>
      <div class="date"><span class="day">2021.06.01</span></div>
    </div>
    <div class="description">
      <h1>記事タイトル</h1>
      <div class="text">
        <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している...</p>
        <a href="#0" class="">詳しく見る</a>
      </div>
    </div>
  </div>


  <!--ページトップ-->
  <div id="page_top"><a href="#"></a></div>
  <footer id="footer" class="outer-block">
    <div class="inner-block">
      <div class="wrap">
        <div class="logo">
          <a href="#"><h1>ARMIC</h1></a>
        </div>
        <div class="cont">
          <div class="c-btn">
            <a href="#">質問</a>
          </div>
          <ul class="nav">
            <li>ユーザー</li>
            <li><a href="">ログイン</a></li>
            <li><a href="">マイページ</a></li>
          </ul>
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