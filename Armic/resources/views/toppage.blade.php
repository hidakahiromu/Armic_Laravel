<head>
  <link rel="stylesheet" href="css/toppage.css">
</head>

<?php
$cnt = 0;
?>

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
        <img src="../image/armic_explain.jpg" class="slides">
      </section>
      <section id="slide2">
        <img src="../image/armic_explain2.jpg" class="slides">
      </section>
      <section id="slide3">
        <img src="../image/armic_explain3.jpg" class="slides">
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
        <a href=""><img src="../image/MLBB.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="Fame">MLBB</span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/骨骨CLUB.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>骨骨CLUB</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/yuzu.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">yuzu</span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/Kimmy.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>Kimmy</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/Freddie Mercury.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>Freddie Mercury</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/BanLasley.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>BanLasley</small></span>
        </div>
      <li>
        <a href=""><img src="../image/jawhead.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">jawhead</span>
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
        <a href=""><img src="../image/SECRET DADY.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>SECRET DADY</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/monkeyPunk.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">monkeyPunk</span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/夜さかな夜.png"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>夜さかな夜</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/K@TE.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>K@TE</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/朴・燐.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span><small>朴・燐</small></span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/Zilong.jpg"></a>
        <!--アー写-->
        <div class="bandname">
          <span class="rookie">Zilong</span>
        </div>
      </li>
      <li>
        <a href=""><img src="../image/ハタ皇子.jpg"></a>
        <div class="bandname">
          <span class="rookie">ハタ皇子</span>
        </div>
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
            <time datetime="2016-1-1">2020.1.16</time>
            <p class="cat01">エンタメ</p>
          </div>
          <p> leoがニューシングル「LET'S MUSIC」発売、「でっけぇお風呂で待ってます」主題歌に </p>
        </a>
      </li>
      <!--ニュース２-->
      <li class="NewsBar2">
        <a href="#">
          <div>
            <time datetime="2016-1-1">2020.1.15</time>
            <p class="cat02">ムービー</p>
          </div>
          <p> CHiSA×Urura、Ayaka書き下ろしのCM曲「突然」をTHE FIRST TAKEでパフォーマンス </p>
        </a>
      </li>
      <li class="NewsBar1">
        <a href="#">
          <div>
            <time datetime="2016-1-1">2020.1.14</time>
            <p class="cat01">アルバム</p>
          </div>
          <p> 骨骨CLUB、コロナ禍の混沌と混乱打ち破るニューアルバム発表 </p>
        </a>
      </li>
      <li class="NewsBar2">
        <a href="#">
          <div>
            <time datetime="2016-1-1">2020.1.13</time>
            <p class="cat02">アニメ</p>
          </div>
          <p> HIDERとCo chouの「血気廻戦」テーマ曲が音源化 </p>
        </a>
      </li>
      <li class="NewsBar1">
        <a href="#">
          <div>
            <time datetime="2016-1-1">2020.1.12</time>
            <p class="cat01">エンタメ</p>
          </div>
          <p>mAsAki、誕生日にSHOWROOMで初ワンマン開催「会えたら会おうね」 </p>
        </a>
      </li>
     
      </li>
    </ul>
  </div> 　
  <!--イベントBOX-->

  
  　<h2 class="Heading">
    <nobr>イベント情報</nobr>
  </h2>

  @foreach($date as $event)
  <div class="ED">
    <div class="ED_card">
      <div class="details">
        <div class="category">
          <p>ライブ</p><br>
        </div>
        <div class="date"><span class="day">{{ $event->event_day }}</span></div>
      </div>
      <div class="description">
        <h1>{{ $event->event_name }}</h1>
        <div class="text">
          <p>{{ $event->event_introduction }}</p>
          <a href="/event" class="">詳しく見る</a>
        </div>
      </div>
    </div>
  <?php ++$cnt ?>
  @if($cnt>1)
  @break
  @endif

@endforeach

<!--     <div class="ED_card">
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
    </div> -->

    <div class="ED_card">
      <div class="description_Jp">
        <p class="ED_jp"><strong>もっとイベントを探す</strong></p>
        <a href="/event" class=""></a>
      </div>
    </div>
  </div>
  </div> 

  <!--ページトップ-->
  <div id="page_top"><a href="#"></a></div>

@endsection