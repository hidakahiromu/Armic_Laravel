  <?php

  if( $file_handle = fopen( FILENAME,'r') ) {
    while( $data = fgets($file_handle) ){
  
      $split_data = preg_split( '/\'/', $data);
  
      $post = array(
          'userID' => $split_data[1],
          'title' => $split_data[3],
          'URL' => $split_data[5],
          'profile' => $split_data[7]
      );
      array_unshift( $post_array, $post);
   }
      // ファイルを閉じる
      fclose( $file_handle);
  }  
  
  // データベースに接続
  $mysqli = new mysqli( 'localhost', 'root', 'password', 'board');
  
  // 接続エラーの確認
  if( $mysqli->connect_errno ) {
      $error_post[] = 'データの読み込みに失敗しました。 エラー番号 '.$mysqli->connect_errno.' : '.$mysqli->connect_error;
  } else {
      $sql = "SELECT view_name,client,post_date FROM client ORDER BY post_date DESC";
      $res = $mysqli->query($sql);
      
      if( $res ) {
          $post_array = $res->fetch_all(MYSQLI_ASSOC);
      }
  
      $mysqli->close();
  }
?>

<head>
  <link rel="stylesheet" href="css/musiclist/Post_Page.css">
</head>


@extends('layouts.app')

@section('content')
<div class="body">
  <div class="post_group">
    <ul class="post_group_1">
      <li calss="post_list_1">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_1">
        <a href="/postmovie/in" title="詳細">
          <nobr>悔やむと書いてミライ</nobr>
        </a><br>
        <a href="アーティストページのlink" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
      <li calss="post_list_2">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_2">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>セカイ</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
    </ul>

    <ul class="post_group_2">
      <li calss="post_list_1">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_1">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>携帯恋話</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
      <li calss="post_list_2">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_2">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>自傷無色</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
    </ul>

    <ul class="post_group_3">
      <li calss="post_list_1">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_1">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>乙女解剖</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
      <li calss="post_list_2">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_2">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>ハロ／ハワユ</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
    </ul>

    <ul class="post_group_4">
      <li calss="post_list_1">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_1">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>ネプトリュード(Class::NEPTLUDE=＞extends.TX_CLUSTERS/.)</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
      <li calss="post_list_2">
        <nobr><iframe width="320" height="180" src="https://www.youtube.com/embed/Y0R2fCN_H1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></nobr>
      </li>
      <li calss="post_element_2">
        <a href="動画再生ページ/post-in.html" title="詳細">
          <nobr>初恋迷子(Ŝvebante en amo la unua)</nobr>
        </a><br>
        <a href="" title="アーティスト">アーティスト</a><br><br><br>
        <p>☆☆☆☆☆()</p>
        <p>viewers:</p>
        <p>タグ、カテゴリ</p>
      </li>
    </ul>
  </div>

  <br>
  <br>
  <br>
  <br>
</div>
@endsection