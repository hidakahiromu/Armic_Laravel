<head>
  <link rel="stylesheet" href="css/musiclist/Post_Page.css">
</head>
<?php
$cnt = 0;
$cnt2 = 1;
$URL1 = '<ul class="post_group_$cnt2">
<li calss="post_list_$cnt"><nobr>
<iframe width="320" height="180" src="';

$URL2 = '" frameborder="0" allow="accelerometer; autoplay; 
clipboard-write; encrypted-media; gyroscope; 
picture-in-picture" allowfullscreen></iframe>';

$youtube = 'https://www';     /*判定用URL*/
$youtube2 = 'https://www.youtube.com/embed/'; /*くっつけるようの文字列*/
$tube;                        /*入れ子用URL*/

?>

@extends('layouts.app')

@section('content')
<div class="body">
  <div class="post_group">
    <div>
      @foreach($date as $event)
      <?php

      if(strcasecmp(substr($event->URL,0,11) , $youtube) == 0 ){
        /*$tube = $event->URL;*/
      }else{
        $tube = mb_substr($event->URL,17);
        $event->URL = $youtube2.$tube;
      }
      


      ++$cnt;
      if ($cnt > 2) {
        echo '</div><div>';
        $cnt = 1;
        ++$cnt2;
      }

      if ($cnt2 > 4) {
        goto a;
      }
      ?>
      <ul class="post_group_" {{ $cnt2 }}>
        <li class="post_list_$cnt">
          <nobr>
            <?php echo $URL1;
            echo $event->URL;
            echo $URL2; ?></nobr>
        </li>
        <li class="post_element_$cnt">
          <form method="POST" action="/postmovie/in" name="LOGIN">
            @csrf
            <input type="hidden" name="URL" value="{{ $event->URL }}">
            <input type="hidden" name="title" value="{{ $event->title }}">
            <input type="hidden" name="profile" value="{{ $event->profile}}">

            <input type="submit" class="post_element_box" value="{{ $event->title }}">

          </form>

          <br>
          <a href="アーティストページのlink" title="アーティスト">{{ $event->userID }}</a><br><br><br>


          <p>☆☆☆☆☆()</p>
          <p>viewers:</p>

          <p>タグ、カテゴリ</p>
        </li>
        <?php a: ?>
        @if ($cnt2>4)
        @break
        @endif
        @endforeach
    </div>


    <br>
    <br>
    <br>
    <br>
  </div>

</div>
@endsection