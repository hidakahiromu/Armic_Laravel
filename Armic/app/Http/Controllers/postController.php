<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
//use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    public function index()
    {
        //return view('');
    }


    protected function create(Request $request)
    {

        // Postモデルのインスタンスを作成する
        $post = new Post();

        $post->userID = $request->userID;
        //曲のタイトル
        $post->title = $request->title;
        //youtubeのリンク
        $post->URL = $request->URL;
        // 曲の詳細
        $post->profile = $request->profile;
        // インスタンスの状態をデータベースに書き込む
        $post->save();
        //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
        $date = Post::all();
        return view('mypage.Mypage')->with('date', $date);
        //return view('/artistlist/artistlistFinish');
    }
}
