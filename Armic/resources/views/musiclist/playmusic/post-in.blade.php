<head>
  <link rel="stylesheet" href="../css/musiclist/post-in.css">
</head>


@extends('layouts.app')
@section('content')

<!--動画-->
<h1 class="Post-Title">{{$data1['title']}}</h1>
<div class="Post-Movie">
  <iframe width="560" height="315" src="{{$data1['URL']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <!-- 視聴数 -->

</div>


<!--動画の詳細-->
<!--評価-->
<form type="get" action="#">
  <div class="Evaluation">
    <input id="star1" type="radio" name="star" value="5" />
    <label for="star1">★</label>
    <input id="star2" type="radio" name="star" value="4" />
    <label for="star2">★</label>
    <input id="star3" type="radio" name="star" value="3" />
    <label for="star3">★</label>
    <input id="star4" type="radio" name="star" value="2" />
    <label for="star4">★</label>
    <input id="star5" type="radio" name="star" value="1" />
    <label for="star5">★</label>
  </div>
</form>
<!--評価ここまで-->

<!--お気に入りボタン-->
<a href="#" class="Post-Favorite">お気に入り</a>

<!--投稿されたコメント一覧-->
<div class="Post-Comment">
  <div class="Post-CommentList">
    こちらにコメントを記入してください<br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>

  <!--コメント入力フォーム-->
  <form action=”#”>
    <div class="Post-CommentInput">
      <input type=”text” name=”Comment” style="font-size: 22px; width: 25em;" maxlength: 200;>
    </div>
  </form>
  <!--コメント投稿ボタン-->
  <a href="#" class="Post-CommentButton">コメント</a>
</div>

<!-- 投稿動画アーティスト詳細 -->


<div class="Post-ArtistDetails">


  <!-- 動画の概要欄 -->

  <div class="Post-ArtistOverview">
    {{$data1['profile']}}


  </div>
</div>




<!--関連動画-->
<!--
<p class="Post-Relation">関連動画</p>

<div class="Post-RelationMusic">
  <ul>
    <a href="">
      <li class="test"></li>
    </a>
    <a href="">
      <li class="test"></li>
    </a>
    <a href="">
      <li class="test"></li>
    </a>
    <a href="">
      <li class="test"></li>
    </a>
    <a href="">
      <li class="test"></li>
    </a>
  </ul>
</div>
<div class="Post-RelationMore"><a href="">>>More</a></div>
-->
<br><br><br><br><br><br><br>


@endsection