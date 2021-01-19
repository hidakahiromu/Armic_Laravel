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
					<th class='Mypage_Posted_MusicBox_TableNumber'>1</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="/mypage/Delete"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>

				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>2</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="/mypage/Delete"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>3</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>4</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
				<tr>
					<th class='Mypage_Posted_MusicBox_TableNumber'>5</th>
					<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
					<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
					<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
					<td class='Mypage_Posted_MusicBox_TableDelete'>
						<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
									<p>delete</p>
								</button></a></div>
					</td>
				</tr>
			</table>


			<div class="menu">

				<input class="Mypage_10menu" type="checkbox" id="change01" class="accordion" />
				<ul id="links01">
					<li>
						<table class='Mypage_Input_Posted_MusicBox'>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>6</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>7</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>8</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>9</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
							<tr>
								<th class='Mypage_Posted_MusicBox_TableNumber'>10</th>
								<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
								<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
								<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
								<td class='Mypage_Posted_MusicBox_TableDelete'>
									<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
												<p>delete</p>
											</button></a></div>
								</td>
							</tr>
						</table>
					</li>
				</ul>
				<label class="Details_label" for="change01">詳細の開閉</label>

			</div>
		</div>
	</div>

	<div class='Mypage_GoodPosted_MusicBox'>
		<table class='Mypage_GoodPosted_MusicBox_Table'>


			<tr>
				<th colspan="5">いいねをした音楽</th>
			</tr>

			<tr>
				<th class='Mypage_Posted_MusicBox_TableNumber'>1</th>
				<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
				<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
				<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
				<td class='Mypage_Posted_MusicBox_TableDelete'>
					<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
								<p>delete</p>
							</button></a></div>
				</td>
			</tr>

			<tr>
				<th class='Mypage_Posted_MusicBox_TableNumber'>2</th>
				<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
				<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
				<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
				<td class='Mypage_Posted_MusicBox_TableDelete'>
					<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
								<p>delete</p>
							</button></a></div>
				</td>
			<tr>
				<th class='Mypage_Posted_MusicBox_TableNumber'>3</th>
				<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
				<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
				<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
				<td class='Mypage_Posted_MusicBox_TableDelete'>
					<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
								<p>delete</p>
							</button></a></div>
				</td>
			</tr>
			<tr>
				<th class='Mypage_Posted_MusicBox_TableNumber'>4</th>
				<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
				<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
				<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
				<td class='Mypage_Posted_MusicBox_TableDelete'>
					<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
								<p>delete</p>
							</button></a></div>
				</td>
			</tr>
			<tr>
				<th class='Mypage_Posted_MusicBox_TableNumber'>5</th>
				<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
				<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
				<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
				<td class='Mypage_Posted_MusicBox_TableDelete'>
					<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
								<p>delete</p>
							</button></a></div>
				</td>
			</tr>
		</table>


		<div class="Goodmenu">

			<input class="Mypage_Good10menu" type="checkbox" id="change02" class="accordion" />
			<ul id="links02">
				<li>
					<table class='Mypage_Input_Posted_MusicBox'>
						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>6</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						</tr>

						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>7</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>8</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						</tr>
						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>9</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						</tr>
						<tr>
							<th class='Mypage_Posted_MusicBox_TableNumber'>10</th>
							<td class='Mypage_Posted_MusicBox_TableMusic'>-</td>
							<td class='Mypage_Posted_MusicBox_TableTime'>-</td>
							<td class='Mypage_Posted_MusicBox_TableSter'>-</td>
							<td class='Mypage_Posted_MusicBox_TableDelete'>
								<div class='Mypage_MusicBox_Delete'><a href="Mypage_Delete.php"><button class="Mypage_Delete_button" type="button" style="width:100%;height:100%">
											<p>delete</p>
										</button></a></div>
							</td>
						</tr>
					</table>
				</li>
			</ul>
			<label class="GoodDetails_label" for="change02">詳細の開閉</label>

		</div>
	</div>
</div>

@endsection