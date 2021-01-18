<head>
  <link rel="stylesheet" href="css/musiclist/Post_Page.css">
</head>
<?php
$cnt = 0;
$cnt2 = 1;
?>

@extends('layouts.app')

@section('content')
<div class="body">
  <div class="post_group">
    <div>
      @foreach($date as $event)
      <?php

      ++$cnt;
      if ($cnt > 2) {
        echo '</div><div>';
        $cnt = 1;
        ++$cnt2;
      }

      if ($cnt2 > 4) {
        goto a;
      }
      echo '<ul class="post_group_$cnt2">
             <li calss="post_list_$cnt">
            <nobr><iframe width="320" height="180" src=" '; ?>
      {{ $event->URL}}

      <?php echo ' " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_$cnt">
      <form method="POST" action="/postmovie/in" name="LOGIN">' ?>@csrf<?php echo '
      <input type="hidden" name="URL" value="'; ?>{{ $event->URL}}<?php echo '">
      <input type="hidden" name="title" value="'; ?>{{ $event->title}}<?php echo '">
      <input type="hidden" name="profile" value="'; ?>{{ $event->profile}}<?php echo '">
      <input type="submit" value="'; ?>

      {{ $event->title}}
      <?php echo ' ">
      </form>
    
      <br>
      <a href="アーティストページのlink" title="アーティスト">'; ?>{{ $event->userID}}<?php echo '</a><br><br><br>
     
      
      <p>☆☆☆☆☆()</p>
      <p>viewers:</p>
     
      <p>タグ、カテゴリ</p>
      </li>
      <ul>';
                                                                      a: ?>
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