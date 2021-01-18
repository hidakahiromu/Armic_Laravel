<head>
  <link rel="stylesheet" href="../css/musiclist/post-in.css">
</head>


@extends('layouts.app')
@section('content')

<!--動画-->
<h1 class="Post-Title"><?php echo $_POST['title'];?></h1>
<div class="Post-Movie">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/CH27pelftXk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <!-- 視聴数 -->
  <p class="Post-Viewers">viewers:00000</p>
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
    test<br><br><br><br><br><br><br><br><br><br><br><br><br>test
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
  <div class="Post-Artist"><a href="">MAMAMOO</a></div>
  <!-- 動画の概要欄 -->
  <div class="Post-ArtistOverview">
    [Special] 마마무(MAMAMOO) - HIP Performance Video<br>

    Instagram: https://bit.ly/2TrQPJD<br>
    Facebook: https://bit.ly/2OYoA1W<br>
    Twitter: https://bit.ly/2TuKNbo<br>

    About MAMAMOO.<br>
    MAMAMOO(마마무) OFFICIAL CHANNEL<br>

    #MAMAMOO #마마무 #HIP<br>

    MAMAMOO.<br>
    SUBSCRIBE: https://bit.ly/2PFdfsI<br>
    https://www.youtube.com/c/MAMAMOO_OFF...<br>
    <br>
    Don't forget to subscribe, like and leave a comment.<br>
  </div>
</div>



<!--関連動画-->
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



@endsection