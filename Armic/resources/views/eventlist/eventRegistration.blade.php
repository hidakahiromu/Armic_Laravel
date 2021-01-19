<head>
    <link rel="stylesheet" href="../css/eventlist/event_registration.css">

</head>


    @extends('layouts.app-2')
    @section('content')
    <!--イベント投稿フォーム-->
    <div class="body">
    <div class="back_ground">
        <h2>イベント投稿フォーム</h2>

        <div class="post_details">
            <p>■依頼者情報 : 登録者様の情報を入力してください</p>
            <p>■基本情報 : イベントに関する情報を入力してください</p>
            <p>■料金・チケット情報 : チケットの有無や料金に関することを入力してください</p>
            <p>■イベントのお問い合わせ先 : イベントに関するお問い合わせの受付先を入力してください</p>
        </div>

    <div class=left_margin><!--文字の左の余白指定-->
        <br><a id="mandatory">必須</a>は必ず入力してください<br>

        <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
        <form action="{{route('event')}}" method="post" enctype="multipart/form-data">
            @csrf
            <a id="item">■依頼者情報 &emsp; ※一般には非公開です</a>
            <!--フォーム要素1(名前)-->
            ・名前<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="name"></label>
                <input type="name" name="name" required="required" <!--placeholder="名前"--></input>
            </div>

            <!--フォーム要素2(電話番号)-->
            ・電話番号<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="phone_number"></label>
                <input type="text" name="phone_number" required="required" <!--placeholder="電話番号"--></input>
            </div>

            <a id="item">■基本情報</a>

             <!--フォーム要素3(イベント名)-->
             ・イベント名<a id="mandatory">必須</a>
             <div class="form-event">
                 <label for="event_name"></label>
                 <input type="text" name="event_name" required="required" <!--placeholder="イベント名"--></input>
             </div>

            <!--フォーム要素4(イベント開催日時)-->
            ・開催日時<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="event_day"></label>
                <input type="date" name="event_day" required="required" <!--placeholder="日時"--></input>
            </div>

            <!--フォーム要素5(イベント会場)-->
            ・イベント会場<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="event_venue"></label>
                <input type="text" name="event_venue" required="required" <!--placeholder="イベント会場"--></input>
            </div>

            <!--フォーム要素6(イベント画像)-->
            ・イベントのサムネイル画像<a id="mandatory">必須</a>
            <div>
                <label for="event_image"></label>
                <input type="file" accept="image/png, image/jpeg" name="event_image" required="required" <!--placeholder="サムネイル画像"--></input>
            </div>
            <br>

            <!--フォーム要素7(イベント紹介文)-->
            ・イベント紹介文<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="event_introduction"></label>
                <textarea name="event_introduction" cols="100" rows="5" required="required" <!--placeholder="イベント紹介文"--></textarea>
            </div>

            <a id="item">■料金・チケット情報</a>

             <!--フォーム要素8(イベント名)-->
             ・チケットの有無<a id="mandatory">必須</a>
             <div> <!--ここにクラスをつけてデザインを変更しよう-->
                 <label for="event_ticket"></label>
                 <input type="radio" name="event_ticket" required="required" value="有">有
                 <input type="radio" name="event_ticket" required="required" value="無">無</input>
             </div>
             <br>

             <!--フォーム要素9(イベント料金)-->
            ・料金<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="event_fee"></label>
                <input type="text" name="event_fee" required="required" placeholder="無料の場合は「0」と入力してください"></input>
            </div>

            <!--フォーム要素10(チケットのお求め先)-->
            ・チケットのお求め先
            <div class="form-event">
                <label for="ticket_where"></label>
                <input type="text" name="ticket_where" placeholder="チケットの買い方やサイトのURLを入力してください"></input>
            </div>

            <a id="item">■イベントのお問い合わせ先</a>

             <!--フォーム要素11(イベントのお問い合わせ先)-->
             ・お問い合わせ先<a id="mandatory">必須</a>
            <div class="form-event">
                <label for="event_contact"></label>
                <textarea name="event_contact" cols="50" rows="3" required="required" placeholder="(例) 000-0000-0000(担当：神戸太郎)aaa@aa.com"></textarea>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <div class="button-panel">
                    <input type="submit" class="button" title="Sign In" value="イベントを投稿"></input>
                  </div>
                </div>
            </div>
            
        </from>
    </div>
    </div>
</div>


    @endsection