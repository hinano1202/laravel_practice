<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller


{
 public function add(){
    return view('admin.news.create');
}


public function create(Request $request){
    
    //valitation
    $this->validate($request, News::$rules);
    $news = new News;
    $form = $request->all();
    
    //画像があったら保存、なかったらnullを返す
    if(isset($form['image'])){
        //$formの中にimageはある？
        $path = $request -> file('image') ->store('public/image');
        //ある場合、imageをアップロードして/public/image/'ファイル名'というパスで保存
        $news -> image_path = basename($path);
        //Newsテーブルのimage_pathに、imageを保存したパスの最後、'ファイル名'の部分だけを書き込む
        
    } else {
        $news -> image_path = null;
        //imageがない場合、image_pathにはnullを返す
    }
    
    unset($form['_token']);
    unset($form['image']);
    //一緒にformにくっついてた2項目を削除
    
    $news->full('form');
    //Newsテーブルの中にformの内容を代入
    $news->save();
    //保存
    
    return redirect('admin/news/create');
}

}