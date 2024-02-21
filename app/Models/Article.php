<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;


class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $guarded = array('id');

    protected $fillable = [
        'posted_date',
        'title',
        'article_contents',
        'created_at',
        'updated_at'
    ];

    // お知らせ新規作成
    public function getArticlesById() {
        // articlesテーブルからデータを取得
        $articles = Article::all();
        return $articles;
    }

    // ユーザーお知らせ一覧
    public function articlesGetList() {
        // articlesテーブルからデータを取得
        $articles = DB::table('articles')->get();
        return $articles;
    }

    // 管理側お知らせ一覧
    public function articlesShowList() {
         // articlesテーブルからデータを取得
        $articles = DB::table('articles')->get();
        return $articles;
    }

     // 登録処理
    public function getArticle($request) {
        DB::table('articles') -> insert([
            // 'id' => $request -> input('id'),
            'title' => $request -> input('title'),
            'article_contents' => $request -> input('article_contents'),
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
    }

    // 更新処理
    public function updateArticles($request, $id) {
        $articles = Article::find($id);
        if($articles) {
            try {
        $articles -> fill([
            'title' => $request -> title,
            'posted_date' => $request -> posted_date,
            'article_contents' => $request -> article_contents,
            'updated_at' => now(),
        ])->save();
        } catch (\Exception $e) {
        // デバッグのために例外メッセージをログに記録
        \Log::error($e->getMessage());
        DB::rollBack();
        return back()->with('error', '記事の更新中にエラーが発生しました。');
    }

    return $articles;
    return null; // または見つからなかった場合の処理
    }}
    // // 削除処理
    // public function deleteRecord($id) {
    //     $record = Products::find($id);
    //     if ($record) {
    //         $record->delete();
    //         return true;
    //     }
    //     return false;
    // }

}
