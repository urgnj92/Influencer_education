<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;



class Admin extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $guarded = array('id');

    protected $fillable = [
        'id',
        'posted_date',
        'article_contents',
        'created_at',
        'updated_at'
    ];

    // データの取得
    public function articlesShowList() {
        // articles tableからデータを取得
        $articles = DB::table('articles')->get();
        return $articles;
    }


    // 削除処理
    public function deleteRecord($id) {
        $record = Products::find($id);
        if ($record) {
            $record->delete();
            return true;
        }
        return false;
    }

}
