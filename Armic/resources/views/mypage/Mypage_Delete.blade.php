<head>
    <link rel="stylesheet" href="../css/mypagecss/Mypage_Delete.css">
</head>
@extends('layouts.app')
@section('content')


<div class="MyPageConfig_back_ground">
    <php? $movietitle='多分イギリス人がしゃべってる' echo $movietitle ?>
        <h2>音楽の削除</h2>

        <div class="MyPageConfig_post_details">
            <p>以下の音楽を本当に削除しますか？</p>

        </div>
        <!--無理-->
        <!-- $movieulink="https://www.youtube.com/embed/" ;&movielink='https://youtu.be/6kUhRhoBNEQ' ; moviester='10' ; ?>
                    -->
        <div class="Mypage_Posted_MusicBox ">
            <table class='Mypage_Posted_MusicBox_Table'>


                <tr>
                    <th class="Mypage_Posted_MusicBox_Tabletitle1">
                        動画
                    </th>
                    <th>
                        <iframe width="320" height="180" src="https://www.youtube.com/embed/om3qyvPxsrY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </th>

                </tr>
                <tr>
                    <th class="Mypage_Posted_MusicBox_Tabletitle2">

                        音楽名
                    </th>
                    <th>
                        おとなあそび　神戸電子専門学校　IT分野　1年生
                    </th>
                </tr>
                <tr>
                    <th class="Mypage_Posted_MusicBox_Tabletitle3">
                        リンク
                        </td>
                    <th><a href="https://youtu.be/6kUhRhoBNEQ" target="_blank">
                            https://www.youtube.com/embed/om3qyvPxsrY
                        </a>

                    </th>
                </tr>

            </table>
            <div class=Mypage_post_button_fream>
                <div class=Mypage_post_button_rightfream>
                    <a href="/mypage">
                        <button class="Mypage_Config_rightbutton" type="button" style="width:100%;height:100%">
                            <p>削除</p>
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


@endsection