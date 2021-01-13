<head>
    <link rel="stylesheet" href="../css/artistlist/artistlistRegistration.css">
</head>

@extends('layouts.app')

@section('content')

<div class="form-wrapper">
    <h2>アーティスト登録</h2>
    <!-- アーティスト新規登録 -->
    <form method="POST" action="/artistlist/artistlistFinish">
    @csrf
        <!-- userID -->
        <div class="form-item">
            <label for="userID"></label>
            <input type="text" name="userID" required="required" placeholder="ユーザ―ID"></input>
        </div>

        <!-- アーティスト名 -->
        <div class="form-item">
            <label for="artistName"></label>
            <input type="text" name="artistName" required="required" placeholder="アーティスト名"></input>
        </div>

        <!-- アーティスト名(フリガナ) -->
        <div class="form-item">
            <label for="artistFrigana"></label>
            <input type="text" name="artistFrigana" required="required" placeholder="フリガナ"></input>
        </div>

        <!-- 送信ボタン -->
        <div class="button-panel">
            <input type="submit" class="button" title="create_artist" value="登録"></input>
        </div>
    </from>



@endsection