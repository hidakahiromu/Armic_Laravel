<head>
  <link rel="stylesheet" href="css/Registration/Rogu.css">
</head>


@extends('layouts.app')

@section('content')
<div class="form-wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <h2>新規登録</h2>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row form-item">

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="名前" autofocus>

                  @error('name')
                  <span class=" invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="form-item">
                <label for="frigana"></label>
                <input type="text" name="frigana" required="required" placeholder="フリガナ"></input>
              </div>
              <!--フォーム要素3（ユーザーID）-->
              <div class="form-item">
                <label for="userID"></label>
                <input type="text" name="userID" required="required" placeholder="ユーザーID"></input>
              </div>

              <div class="form-group row form-item">


                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row form-item">


                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row form-item">
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="もう一度パスワードを入力してください">
                </div>

              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <div class="button-panel">
                    <input type="submit" class="button" title="Sign In" value="Armicアカウントを作成する"></input>
                  </div>
                </div>
              </div>
            </form>
            <div class="form-footer">
              <p>すでにアカウントをお持ちの方はこちら↓<br><a href="{{ route('login') }}">ログイン</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection