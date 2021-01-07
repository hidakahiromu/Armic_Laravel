<head>
  <link rel="stylesheet" href="css/Registration/Rogu.css">
</head>
@extends('layouts.app')

@section('content')

<!--ログインフォーム始-->
<div class="form-wrapper">
  <h2>ログインしよう</h2>
  <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <!--フォーム要素１（メール）-->
    <!--required="required"-->
    <div class="form-item">
      <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="メールアドレス" autofocus></input>


    </div>
    <!--フォーム要素２（ユーザーID）-->
    <div class="form-item">
      <input type="text" name="userID" placeholder="ユーザーID"></input>
    </div>
    <!--フォーム要素３（パスワード）-->
    <div class="form-item col-md-6">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="パスワード"></input>

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror

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