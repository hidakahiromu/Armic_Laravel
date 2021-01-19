<head>
    <link rel="stylesheet" href="css/eventlist/event.css">
    <!--<link rel="stylesheet" href="css/eventlist/Top_page.css">-->
    <!--これバグ凄い-->
    <link rel="stylesheet" href="css/toppage.css">

</head>

<?php $cnt=0 ?>

@extends('layouts.app')
@section('content')
<!--イベント要素-->
<div class="near_event">
    <h2 class="slider_ttl">開催間近のイベント</h2>
    <ul class="horizontal_scroll ">
        <li>
            <span class="nodesize">2021年1月20日開催</span>
            <a href=""><img src="../../image/a.jpg" width="140px" height="80px"></a>
            <div class="drumname">
                <span><small>libru</small></span>
            </div>
        </li>
        <li>
            <span class="nodesize">2021年1月21日開催</span>
            <a href=""><img src="../../image/b.jpg" width="140px" height="80px"></a>
            <div class="drumname">
                <span><small>Clif</small></span>
            </div>
        </li>
        <li>
            <span class="nodesize">2021年1月22日開催</span>
            <a href=""><img src="../../image/c.jpg" width="140px" height="80px"></a>
            <div class="drumname">
                <span><small>oiler</small></span>
            </div>
        </li>
        <li>
            <span class="nodesize">2021年1月23日開催</span>
            <a href=""><img src="../../image/d.jpg" width="140px" height="80px"></a>
            <div class="drumname">
                <span><small>caster</small></span>
            </div>
        </li>
        <li>
            <span class="nodesize">2021年1月24日開催</span>
            <a href=""><img src="../../image/e.jpg" width="140px" height="80px"></a>
            <div class="drumname">
                <span><small>佐々木簪</small></span>
            </div>

        </li>
    </ul>
</div>
<!--イベント要素-->
<li class="sbs">
    <h2 class="slider_ttl">新着イベント</h2>
    <!--イベント新規作成↓-->
    <div class="new_create"><a href="/event/eventRegistration">新規作成</a> </div>
</li>
<!--イベント新規作成↑-->



    @foreach($date as $event)   
    <?php ++$cnt ?>
        <div class="event_all">
            <div class="photo"><img src="../../image/{{$cnt}}.jpg" alt="" ></div>
                <!-- {{asset('storage/image/'.$event->file)}} -->
            <div class="details">
                <div class="category">
                    <p>ライブ</p>
                </div>
                <div class=event_title>{{ $event->event_name }}</div>
                <div class="date">主催 {{$event->name}} 開催場所 {{$event->event_venue}}　<br>開催日時 <span class="day">{{$event->event_day}}</span></div>
            </div>
            <div class="description">
                <h1></h1>
                <div class="text">
                    <p>{{$event->event_introduction}}</p>
                    <a href="#0" class="">詳しく見る</a>
                </div>
            </div>
        </div>
    
    @endforeach
    
<!-- <div class="event_all">
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
</div> -->

<!--イベント要素ここまで,これを下に並べる-->

<!--背景-->
<div class="bg_test">
    <div class="bg_test-text">
    </div>
</div>
@endsection