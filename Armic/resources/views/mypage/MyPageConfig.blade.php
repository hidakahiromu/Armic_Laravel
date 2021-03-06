<head>
  <link rel="stylesheet" href="../css/mypagecss/Mypage_Delete.css">
</head>
@extends('layouts.app')
@section('content')




<div class="MyPageConfig_back_ground">
  <h2>アーティスト名の取得</h2>

  <div class="MyPageConfig_post_details">
    <p>アーティスト名は、音楽の投稿やマイページの機能を使用するために必要となります。他のユーザーと同一のアーティスト名にすることは可能ですが.貴方の音楽を聞く人が他のアーティストが作ったものだと勘違いする可能性があるため、出来るだけ他のユーザーと同じになることの少ないアーティスト名を考えることをお勧めします.<br>※注意 : アーティスト名は変更することが出来ません.<br>以下の項目に必要事項を記入してください.</p>

  </div>

  <div class=MyPageConfig_left_margin>
    <!--文字の左の余白指定-->
    <br><br><br>

    <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
    <form action="" method="post" 　>
      <p>アーティスト名
      <p>
      <div>
        <div class="MyPageConfig_form-event">

          <label for="name"></label>
          <input type="name" name="name" required="required" <!--placeholder="名前" --></input>
          <br><br><br>
        </div>

        <div class=Mypage_post_button_fream>
          <div class=Mypage_post_button_rightfream>
            <a href="/mypage">
              <button class="Mypage_Config_rightbutton" type="button" style="width:100%;height:100%">
                <p>取得</p>
              </button></a>
          </div>
          <div class=Mypage_post_button_leftfream>
            <a href="/mypage">
              <button class="Mypage_Config_leftbutton" type="button" style="width:100%;height:100%">
                <p>戻る</p>
              </button></a>
          </div>
        </div>
      </div>
  </div>

  </from>
</div>

@endsection