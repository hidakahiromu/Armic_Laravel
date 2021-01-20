<head>
    <link rel="stylesheet" href="css/artistlist/artistlist.css">
</head>

@extends('layouts.app')

@section('content')
<div class="body">
    @guest
    <!-- アーティスト登録 -->
    @else
    <div class="new_create"><a href="/artistlist/artistlistRegistration">アーティスト登録はこちら</a> </div>
    @endguest
    <!----- メインコンテンツ ----->
    <div class="menu">
        <label class="odd" for="menu_bar01">あ行</label>
        <input type="checkbox" id="menu_bar01" class="accordion" />
        <ul id="links01">
        @foreach ($user as $a)
            @if(mb_substr($a->artistFrigana , 0 , 1) == "ア" or 
                mb_substr($a->artistFrigana , 0 , 1) == "イ" or
                mb_substr($a->artistFrigana , 0 , 1) == "ウ" or
                mb_substr($a->artistFrigana , 0 , 1) == "ヴ" or
                mb_substr($a->artistFrigana , 0 , 1) == "エ" or
                mb_substr($a->artistFrigana , 0 , 1) == "オ" )
                <li><a href="">{{ $a->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar02">か行</label>
        <input type="checkbox" id="menu_bar02" class="accordion" />
        <ul id="links02">
        @foreach ($user as $ka)
            @if(mb_substr($ka->artistFrigana , 0 , 1) == "カ" or 
                mb_substr($ka->artistFrigana , 0 , 1) == "キ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "ク" or
                mb_substr($ka->artistFrigana , 0 , 1) == "ケ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "コ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "ガ" or 
                mb_substr($ka->artistFrigana , 0 , 1) == "ギ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "グ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "ゲ" or
                mb_substr($ka->artistFrigana , 0 , 1) == "ゴ" )
                <li><a href="">{{ $ka->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label class="odd" for="menu_bar03">さ行</label>
        <input type="checkbox" id="menu_bar03" class="accordion" />
        <ul id="links03">
        @foreach ($user as $sa)
            @if(mb_substr($sa->artistFrigana , 0 , 1) == "サ" or 
                mb_substr($sa->artistFrigana , 0 , 1) == "シ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ス" or
                mb_substr($sa->artistFrigana , 0 , 1) == "セ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ソ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ザ" or 
                mb_substr($sa->artistFrigana , 0 , 1) == "ジ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ズ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ゼ" or
                mb_substr($sa->artistFrigana , 0 , 1) == "ゾ")
                <li><a href="">{{ $sa->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar04">た行</label>
        <input type="checkbox" id="menu_bar04" class="accordion" />
        <ul id="links04">
        @foreach ($user as $ta)
            @if(mb_substr($ta->artistFrigana , 0 , 1) == "タ" or 
                mb_substr($ta->artistFrigana , 0 , 1) == "チ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ツ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "テ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ト" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ダ" or 
                mb_substr($ta->artistFrigana , 0 , 1) == "ヂ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ヅ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "デ" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ド" or
                mb_substr($ta->artistFrigana , 0 , 1) == "ッ" )
                <li><a href="">{{ $ta->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label class="odd" for="menu_bar05">な行</label>
        <input type="checkbox" id="menu_bar05" class="accordion" />
        <ul id="links05">
        @foreach ($user as $na)
            @if(mb_substr($na->artistFrigana , 0 , 1) == "ナ" or 
                mb_substr($na->artistFrigana , 0 , 1) == "ニ" or
                mb_substr($na->artistFrigana , 0 , 1) == "ヌ" or
                mb_substr($na->artistFrigana , 0 , 1) == "ネ" or
                mb_substr($na->artistFrigana , 0 , 1) == "ノ" )
                <li><a href="">{{ $na->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar06">は行</label>
        <input type="checkbox" id="menu_bar06" class="accordion" />
        <ul id="links06">
        @foreach ($user as $ha)
            @if(mb_substr($ha->artistFrigana , 0 , 1) == "ハ" or 
                mb_substr($ha->artistFrigana , 0 , 1) == "ヒ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "フ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "ヘ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "ホ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "バ" or 
                mb_substr($ha->artistFrigana , 0 , 1) == "ビ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "ブ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "ベ" or
                mb_substr($ha->artistFrigana , 0 , 1) == "ボ" )
                <li><a href="">{{ $ha->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label class="odd" for="menu_bar07">ま行</label>
        <input type="checkbox" id="menu_bar07" class="accordion" />
        <ul id="links07">
        @foreach ($user as $ma)
            @if(mb_substr($ma->artistFrigana , 0 , 1) == "マ" or 
                mb_substr($ma->artistFrigana , 0 , 1) == "ミ" or
                mb_substr($ma->artistFrigana , 0 , 1) == "ム" or
                mb_substr($ma->artistFrigana , 0 , 1) == "メ" or
                mb_substr($ma->artistFrigana , 0 , 1) == "モ" )
                <li><a href="">{{ $ma->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar08">や行</label>
        <input type="checkbox" id="menu_bar08" class="accordion" />
        <ul id="links08">
        @foreach ($user as $ya)
            @if(mb_substr($ya->artistFrigana , 0 , 1) == "ヤ" or 
                mb_substr($ya->artistFrigana , 0 , 1) == "ユ" or
                mb_substr($ya->artistFrigana , 0 , 1) == "ヨ" or
                mb_substr($ya->artistFrigana , 0 , 1) == "ャ" or 
                mb_substr($ya->artistFrigana , 0 , 1) == "ュ" or
                mb_substr($ya->artistFrigana , 0 , 1) == "ョ" )
                <li><a href="">{{ $ya->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label class="odd" for="menu_bar09">ら行</label>
        <input type="checkbox" id="menu_bar09" class="accordion" />
        <ul id="links09">
        @foreach ($user as $ra)
            @if(mb_substr($ra->artistFrigana , 0 , 1) == "ラ" or 
                mb_substr($ra->artistFrigana , 0 , 1) == "リ" or
                mb_substr($ra->artistFrigana , 0 , 1) == "ル" or
                mb_substr($ra->artistFrigana , 0 , 1) == "レ" or
                mb_substr($ra->artistFrigana , 0 , 1) == "ロ" )
                <li><a href="">{{ $ra->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar10">わ行</label>
        <input type="checkbox" id="menu_bar10" class="accordion" />
        <ul id="links10">
        @foreach ($user as $wa)
            @if(mb_substr($wa->artistFrigana , 0 , 1) == "ワ" or 
                mb_substr($wa->artistFrigana , 0 , 1) == "ヲ" or
                mb_substr($wa->artistFrigana , 0 , 1) == "ン" )
                <li><a href="">{{ $wa->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label class="odd" for="menu_bar11">a~z</label>
        <input type="checkbox" id="menu_bar11" class="accordion" />
        <ul id="links11">
        @foreach ($user as $alfa)
            @if(mb_substr($alfa->artistFrigana , 0 , 1) == "a" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "b" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "c" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "d" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "e" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "f" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "g" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "h" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "i" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "j" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "k" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "l" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "m" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "n" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "o" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "p" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "q" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "r" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "s" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "t" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "u" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "v" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "w" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "x" or
                mb_substr($alfa->artistFrigana , 0 , 1) == "y" or 
                mb_substr($alfa->artistFrigana , 0 , 1) == "z" )
                <li><a href="">{{ $wa->artistName }}</a></li>
            @endif
        @endforeach
        </ul>

        <label for="menu_bar12">数字記号</label>
        <input type="checkbox" id="menu_bar12" class="accordion" />
        <ul id="links12">
        @foreach ($user as $kazu)
            @if(mb_substr($kazu->artistFrigana , 0 , 1) == "1" or 
                mb_substr($kazu->artistFrigana , 0 , 1) == "2" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "3" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "4" or 
                mb_substr($kazu->artistFrigana , 0 , 1) == "5" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "6" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "7" or 
                mb_substr($kazu->artistFrigana , 0 , 1) == "8" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "9" or
                mb_substr($kazu->artistFrigana , 0 , 1) == "0")
                <li><a href="">{{ $wa->artistName }}</a></li>
            @endif
        @endforeach
        </ul><br><br>
    </div>
    <!----- メインコンテンツ END ----->

</div>
@endsection