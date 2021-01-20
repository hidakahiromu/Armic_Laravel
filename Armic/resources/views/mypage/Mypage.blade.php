<head>
	<link rel="stylesheet" href="css/mypagecss/Mypage.css">
</head>
@extends('layouts.app')
@section('content')



<div class="Mypage_background">
	<!--<div class="Mypage_box1">
      <p>ここに文章</p>
    </div>-->
	<!--ただのコメント-->
	<div class="Mypage_Allbox">
		<!--このクラスは今のところ使わない-->
		<div class=Mypage_NameIcon_box>

			<?php $username = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'; ?>
			<!--$usernameにusernameを入れる-->

			<div class="Mypage_NameBox">
				<p>{{ Auth::user()->name }}</p>
				<p>さんようこそ</p>
				<!--マイページ編集画面移動-->
				<div class=Mypage_config><a href="/mypage/artistname"><button class="Mypage_Config_button" type="button" style="width:100%;height:100%">
							<p>Config</p>
						</button></a></div>
			</div>

			<div class="Mypage_IconBox">





				<!-- <img src=$comment>画像ファイルの名前の変数を記入-->

			</div>
		</div>

		 

		<div class=Mypage_IconChangeBox>
			<form method="POST" action="mypage" enctype="multipart/form-data">アイコンを変更する
				<input type="file" name="upimg" accept="image/*">
				<input type="submit">

			</form>
		</div>
		<div class='Mypage_MusicBox'><a href="/mypage/Musicpost"><button class="Mypage_button" type="button" style="width:100%;height:100%">
					<p>音楽を投稿したい方はこちら</p>
				</button></a></div>
		<div class='Mypage_Posted_MusicBox '>
			<table class='Mypage_Posted_MusicBox_Table'>

				<tr>
					<th colspan="5">過去に投稿した音楽</th>
				</tr>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>番号</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>音楽名</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>URL</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>詳細</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<p>消去ボタン</p>
		</div>
		</td>
		</tr>
		<?php $cnt = 0; ?>
		@foreach($date as $event)
		<?php ++$cnt; ?>


		<tr>
			<th class='Mypage_Posted_MusicBox_TableNumber'>{{$cnt}}</th>
			<td class='Mypage_Posted_MusicBox_TableMusic'>{{ $event->title }}</td>
			<td class='Mypage_Posted_MusicBox_TableTime'>{{ $event->URL}}</td>
			<td class='Mypage_Posted_MusicBox_TableSter'>{{ $event->profile}}</td>
			<td class='Mypage_Posted_MusicBox_TableDelete'>
				<div class='Mypage_MusicBox_Delete'><a href="/mypage/Delete"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
							<p>delete</p>
						</button></a></div>
			</td>
		</tr>
		@if($cnt>4)
		@break
		@endif
		@endforeach



		</tr>
		</table>

		@if($cnt==5)
		<div class="menu">

			<input class="Mypage_10menu" type="checkbox" id="change01" class="accordion" />
			<ul id="links01">
				<li>
					<table class='Mypage_Input_Posted_MusicBox'>


						<?php $cnt = 0; ?>
						@foreach($date as $event)
						<?php ++$cnt; ?>
						@if(6>$cnt)
						@continue
						@endif
						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>{{$cnt}}</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>{{ $event->title }}</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>{{ $event->URL}}</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>{{ $event->profile}}</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="/mypage/Delete"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						</tr>
						@if($cnt>9)
						@break
						@endif
						@endforeach

					</table>
				</li>
			</ul>
			@if($cnt>5)
			<label class="Details_label" for="change01">詳細の開閉</label>
			@endif
		</div>
		@endif
	</div>
</div>




@endsection