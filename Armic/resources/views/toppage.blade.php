<head>
  <link rel="stylesheet" href="css/toppage.css">
</head>


@extends('layouts.app')

@section('content')

<!--スライドショー-->
<div class="slideshow">
  <input type="radio" name="slideshow" id="switch1" checked>
  <input type="radio" name="slideshow" id="switch2">
  <input type="radio" name="slideshow" id="switch3">
  <input type="radio" name="slideshow" id="switch4">
  <input type="radio" name="slideshow" id="switch5">

  <div class="slideContents">
    <section id="slide1">
      <img src="image/Armic-transparent.png" class="slides">
    </section>
    <section id="slide2">
      <img src="image/Armic-transparent.png" class="slides">
    </section>
    <section id="slide3">
      <img src="スライド6.PNG" class="slides">
    </section>
    <section id="slide4">
      <img src="スライド7.PNG" class="slides">
    </section>
    <section id="slide5">
      <img src="スライド3.PNG" class="slides">
    </section>
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
<br>
<h2 class="Heading">
  <nobr>ランキング</nobr>
</h2>
<br>
<h3 class="SubTitle">
  <nobr>人気投稿</nobr>
</h3>
<div class="">
  <ul class="horizontal_scroll rank">
    <li>
      <a href=""><img src="image/armicicon.png"></a>
      <!--アー写-->
      <div class="bandname">
        <span class="Fame">ARMIC</span>
      </div>
    </li>
    <li>
      <a href=""><img src=""></a>
      <!--アー写-->
      <div class="bandname">
        <span><small>NEWS</small></span>
      </div>
    </li>
    <li>
      <a href=""><img src=""></a>
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
<h3 class="SubTitle">
  <nobr>いいね数</nobr>
</h3>
<div class="rank">
  <ul class="horizontal_scroll rank">
    <li>
      <a href=""><img src="image/armicicon.png"></a>
      <!--アー写-->
      <div class="bandname">
        <span><small>NEWS</small></span>
      </div>
    </li>
    <li>
      <a href=""><img src=""></a>
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
<div id="new" class="JpPoji"></div>
　<h2 class="Heading">
  <nobr>ニュース</nobr>
</h2>
<br>
<div id="newse">
  　<ul class="msr_newslist">
    <!--ニュース１-->
    <li class="NewsBar1">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.12.01</time>
          <p class="cat01">cat01</p>
        </div>
        <p> ニュース１テキストテキスト </p>
      </a>
    </li>
    <!--ニュース２-->
    <li class="NewsBar2">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.12.01</time>
          <p class="cat02">cat01</p>
        </div>
        <p> ニュース２テキストテキスト </p>
      </a>
    </li>
    <li class="NewsBar1">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.12.01</time>
          <p class="cat01">cat01</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
    <li class="NewsBar2">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2020.01.01</time>
          <p class="cat02">cat02</p>
        </div>
        <p> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト </p>
      </a>
    </li>
    <li class="NewsBar1">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2019.09.01</time>
          <p class="cat01">cat01</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
    <li class="NewsBar2">
      <a href="#">
        <div>
          <time datetime="2016-1-1">2019.01.01</time>
          <p class="cat02">cat02</p>
        </div>
        <p> テキストテキスト </p>
      </a>
    </li>
  </ul>
</div> 　
<!--イベントBOX-->
　
　<h2 class="Heading">
  <nobr>イベント情報</nobr>
</h2>
<div class="ED">
  <div class="ED_card">
    <div class="details">
      <div class="category">
        <p>初ライブ</p><br>
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

  <div class="ED_card">
    <div class="details">
      <div class="category">
        <p>トーク</p><br>
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

  <div class="ED_card">
    <div class="description_Jp">
      <p class="ED_jp"><strong>もっとイベントを探す</strong></p>
      <a href="/event" class=""></a>
    </div>
  </div>
</div>
</div>

@endsection