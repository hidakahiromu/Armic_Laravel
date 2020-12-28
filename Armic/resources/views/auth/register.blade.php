<head>
  <link rel="stylesheet" href="css/Registration/Rogu.css">
</head>
@extends('layouts.app')

@section('content')
<!--ログインフォーム始-->
<div class="form-wrapper">
  <h1>新規登録</h1>
  <!--↓action = ""送信先 　method = "post"送信形式?URLに送信内容を表示させない（get内容を表示する）-->

  <form method="POST" action="{{ route('register')}}">
    @csrf

    <!--フォーム要素1（名前）-->
    <!-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"required="required"  placeholder="名前" ><input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"required="required"  placeholder="名前" > -->
    <div class="form-item">
      <label for="name"></label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required="required" placeholder="名前">

    </div>

    <!--フォーム要素2（フリガナ）-->
    <div class="form-item">
      <label for="frigana"></label>
      <input type="text" name="frigana" required="required" placeholder="フリガナ"></input>
    </div>
    <!--フォーム要素3（ユーザーID）-->
    <div class="form-item">
      <label for="userID"></label>
      <input type="text" name="userID" required="required" placeholder="ユーザーID"></input>
    </div>
    <!--フォーム要素4（メール）-->
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
    </div>
    <!--フォーム要素5（パスワード）-->
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="パスワード"></input>
    </div>
    <!--フォーム要素6（パスワード再確認）-->
    <div class="form-item">
      <label for="password2"></label>
      <input type="password" name="password_confirmation" required="required" placeholder="もう一度パスワードを入力してください"></input>
    </div>
    <!--利用契約同意ボタン-->
    <!--ここはいるのかわからない？（利用規約確認ページ）-->
    <!--
    <div class="usage_con_button">
      <a>利用規約</a><br>


      <input type="checkbox" name="Usage_contract" required="required">利用契約に同意します</input>
    </div>
-->
    <!--ボタン-->
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Armicアカウントを作成する"></input>
    </div>
    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
        </button>
      </div>
    </div>
  </form>
  <!--リンク（新規、パス忘れ）-->
  <div class="form-footer">
    <p>すでにアカウントをお持ちの方はこちら↓<br><a href="{{ route('login') }}">ログイン</a></p>
  </div>
</div>
<!--ログインフォーム終-->
@endsection