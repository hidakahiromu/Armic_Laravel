<head>
    <link rel="stylesheet" href="../css/mypagecss/Mypage_Delete.css">
</head>
@extends('layouts.app')
@section('content')



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
        <form action="/mypage" method="POST" 　>
            <div>
                @csrf
                <div class="MyPageConfig_form-event">
                    <p>userID
                    <p>
                        <label for="title"></label>
                        <input type="text" name="userID" required="required" <!--placeholder="名前" --></input>
                        <br><br><br>
                </div>
                <div class="MyPageConfig_form-event">
                    <p>音楽名
                    <p>
                        <label for="title"></label>
                        <input type="text" name="title" required="required" <!--placeholder="名前" --></input>
                        <br><br><br>
                </div>
                <div class="MyPageConfig_form-event">
                    <p>音楽のリンク (音楽をyoutubeに投稿し,youtubeの動画リンクを記入してください.)
                    <p>
                        <label for="URL"></label>
                        <input type="text" name="URL" required="required" <!--placeholder="名前" --></input>
                        <br><br><br>
                </div>
                <div class="MyPageConfig_form-event">
                    <p>コメント
                    <p>
                    <div class="MyPageConfig_form-event">
                        <label for="profile"></label>
                        <textarea name="profile" cols="100" rows="5" required="required" <!--placeholder="イベント紹介文" --></textarea>
                    </div>
                    <br><br><br>
                </div>
                <!--インスタグラム　ツイッター 低-->

                <div class=Mypage_post_button_fream>
                    <div class=Mypage_post_button_rightfream>
                        <input type="submit" class="Mypage_Config_rightbutton" title="create_artist" value="登録" style="width:100%;height:100%"></input>
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