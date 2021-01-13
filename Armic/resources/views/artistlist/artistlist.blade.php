<head>
    <link rel="stylesheet" href="css/artistlist/artistlist.css">
</head>

@extends('layouts.app')

@section('content')
<div class="body">
    <!-- アーティスト登録 -->
    <div class="new_create"><a href="/artistlist/artistlistRegistration">アーティスト登録はこちら</a> </div>
    <!----- メインコンテンツ ----->
    <div class="menu">
        <label class="odd" for="menu_bar01">あ行</label>
        <input type="checkbox" id="menu_bar01" class="accordion" />
        <ul id="links01">
            <li><a href="">あ</a></li>
            <li><a href="">aiko（１２３）</a></li>
            <li><a href="">嵐（６００）</a></li>
            <li><a href="">Link03</a></li>
            <li><a href="">Link04</a></li>
            <li><a href="">Link03</a></li>
            <li><a href="">Link04</a></li>
        </ul>

        <label for="menu_bar02">か行</label>
        <input type="checkbox" id="menu_bar02" class="accordion" />
        <ul id="links02">
            <li><a href="">Link01</a></li>
            <li><a href="">Link01</a></li>
            <li><a href="">Link01</a></li>
        </ul>

        <label class="odd" for="menu_bar03">さ行</label>
        <input type="checkbox" id="menu_bar03" class="accordion" />
        <ul id="links03">
            <li><a href="">Link01</a></li>
        </ul>

        <label for="menu_bar04">た行</label>
        <input type="checkbox" id="menu_bar04" class="accordion" />
        <ul id="links04">
            <li><a href="">Link01</a></li>
        </ul>

        <label class="odd" for="menu_bar05">な行</label>
        <input type="checkbox" id="menu_bar05" class="accordion" />
        <ul id="links05">
            <li><a href="">Link01</a></li>
        </ul>

        <label for="menu_bar06">は行</label>
        <input type="checkbox" id="menu_bar06" class="accordion" />
        <ul id="links06">
            <li><a href="">Link01</a></li>
        </ul>

        <label class="odd" for="menu_bar07">ま行</label>
        <input type="checkbox" id="menu_bar07" class="accordion" />
        <ul id="links07">
            <li><a href="">Link01</a></li>
        </ul>

        <label for="menu_bar08">や行</label>
        <input type="checkbox" id="menu_bar08" class="accordion" />
        <ul id="links08">
            <li><a href="">Link01</a></li>
        </ul>

        <label class="odd" for="menu_bar09">ら行</label>
        <input type="checkbox" id="menu_bar09" class="accordion" />
        <ul id="links09">
            <li><a href="">Link01</a></li>
        </ul>

        <label for="menu_bar10">わ行</label>
        <input type="checkbox" id="menu_bar10" class="accordion" />
        <ul id="links10">
            <li><a href="">Link01</a></li>
        </ul>

        <label class="odd" for="menu_bar11">a~z</label>
        <input type="checkbox" id="menu_bar11" class="accordion" />
        <ul id="links11">
            <li><a href="">Link01</a></li>
        </ul>

        <label for="menu_bar12">数字記号</label>
        <input type="checkbox" id="menu_bar12" class="accordion" />
        <ul id="links12">
            <li><a href="">Link01</a></li>
        </ul>
    </div>
    <!----- メインコンテンツ END ----->

</div>
@endsection