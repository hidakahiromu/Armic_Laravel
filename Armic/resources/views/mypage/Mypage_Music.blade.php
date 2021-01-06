<head>
    <link rel="stylesheet" href="../css/mypagecss/Mypage_Delete.css">
</head>
@extends('layouts.app-2')
@section('content')

<div class="body">

    <div class="MyPageConfig_back_ground">
        <h2>音楽の投稿</h2>

        <div class="MyPageConfig_post_details">
            <p>こちらは音楽を投稿するページです。音楽を投稿して多くの人に聞いてもらいましょう.</p>
            <p>以下の項目に必要事項を記入してください.</p>
            </p>

        </div>

        <div class=MyPageConfig_left_margin>
            <!--文字の左の余白指定-->
            <br><br><br>

            <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
            <form action="" method="post" 　>
                <div>
                    <div class="MyPageConfig_form-event">
                        <p>音楽名
                        <p>
                            <label for="name"></label>
                            <input type="name" name="name" required="required" <!--placeholder="名前" --></input>
                            <br><br><br>
                    </div>
                    <div class="MyPageConfig_form-event">
                        <p>音楽のリンク (音楽をyoutubeに投稿し,youtubeの動画リンクを記入してください.)
                        <p>
                            <label for="name"></label>
                            <input type="name" name="name" required="required" <!--placeholder="名前" --></input>
                            <br><br><br>
                    </div>
                    <div class="MyPageConfig_form-event">
                        <p>コメント
                        <p>
                        <div class="MyPageConfig_form-event">
                            <label for="event_introduction"></label>
                            <textarea name="event_introduction" cols="100" rows="5" required="required" <!--placeholder="イベント紹介文" --></textarea>
                        </div>
                        <br><br><br>
                    </div>
                    <!--インスタグラム　ツイッター 低-->

                    <div class=Mypage_post_button_fream>
                        <div class=Mypage_post_button_rightfream>
                            <a href="/mypage">
                                <button class="Mypage_Config_rightbutton" type="button" style="width:100%;height:100%">
                                    <p>投稿</p>
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
</div>
@endsection