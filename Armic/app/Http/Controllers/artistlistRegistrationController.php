<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMusic;
use Illuminate\Support\Facades\Validator;

class artistlistRegistrationController extends Controller
{
    public function index()
    {
        return view('/artistlist/artistlistRegistration');
    }

    protected function create(Request $request)
    {

        // Postモデルのインスタンスを作成する
        $post = new UserMusic();
        // タイトル
        $post->userID = $request->userID;
        //コンテンツ
        $post->artistName = $request->artistName;
        //登録ユーザーからidを取得
        $post->artistFrigana = $request->artistFrigana;
        // インスタンスの状態をデータベースに書き込む
        $post->save();
        //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
        return view('/artistlist/artistlistFinish');
        /*redirect()->route('posts.detail', [
            'id' => $post->id,
        ]);*/
    }
}
