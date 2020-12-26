<head>
<link rel="stylesheet" href="css/Registration/Rogu.css">
</head>
@extends('layouts.app')

@section('content')

  <!--ログインフォーム始-->
  <div class="form-wrapper">
      <h1>ログインしよう</h1>
      <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
      <form method="POST" action="{{ route('login') }}">
          <!--フォーム要素１（メール）-->
          <!--required="required"-->
        <div class="form-item">
          <label for="email"></label>
          <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
        </div>
           <!--フォーム要素２（ユーザーID）-->
        <div class="form-item">
          <label for="UserId"></label>
          <input type="text" name="UserId" required="required" placeholder="ユーザーID"></input>
        </div>
          <!--フォーム要素３（パスワード）-->
        <div class="form-item">
          <label for="password"></label>
          <input type="password" name="password" required="required" placeholder="パスワード"></input>
        </div>
        <!--ボタン-->
        <div class="button-panel">
          <input type="submit" class="button" title="Sign In" value="ログイン"></input>
        </div>
      </form>
      <!--リンク（新規、パス忘れ）-->
      <div class="form-footer">
        <p><a href="{{ route('register') }}">新規登録</a></p>
        <p><a href="{{ route('password.request') }}">パスワードを忘れた場合</a></p>
      </div>
    </div>
  <!--ログインフォーム終-->

@endsection
