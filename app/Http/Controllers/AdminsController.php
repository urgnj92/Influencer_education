<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use App\Models\Admin;
use Carbon\Carbon;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // お知らせ新規作成
    public function create()
    {
        // インスタンス生成
        $model = new Article();
        // articlesテーブルからデータを取得
        $articles = $model->getArticlesById();
        return view('create_notice', ['articles' => $articles]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 登録処理
    public function store(Request $request)
    {
        //トランザクション開始
        DB::beginTransaction();
        try {
            // インスタンス生成
            $model = new Article();
            // 登録処理呼び出し
            $model->getArticle($request);
            DB::commit();
        } catch (\exception $e) {
            DB::rollback();
            return back();
        }
        return redirect(route('notice_admin_new'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 
    // お知らせ一覧
    public function show(Request $request) 
    {
        // インスタンス生成
        $model = new Article;
        // articlesテーブルからデータを取得
        $articles = $model->articlesShowList();
        
        // $articles内の各記事のposted_dateをCarbonのインスタンスに変換
        foreach ($articles as $article) {
            $article->posted_date = Carbon::parse($article->posted_date);
        }
    
        return view('notice_admin', ['articles' => $articles]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // お知らせ編集画面
    public function edit($id)
    {
        $model = new Article();
        // Articlesテーブルからデータを取得
        $articles = $model-> getArticlesById($id);
        return view('notice_admin_update',['articles' => $articles]);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // お知らせ更新
    public function update(Request $request, $id)
    {
        // トランザクション開始
        DB::beginTransaction();
        try {
        // 更新処理呼び出し
        $model = new Article();
        $articles= $model->updateArticles($request, $id);
            DB::commit();
            } catch (\Exception $e) {
            DB::rollback();
            return back();
        }
        return redirect(route('notice_admin', ['id' => $id]));    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // 商品削除
    // public function delete($id) {
    //     // トランザクション開始
    //     DB::beginTransaction();
        
    //     try {
    //         // 削除処理呼び出し
    //         $model = new Products();
    //         $product = $model->deleteRecord($id);

    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         return back();
    //     }
    
    //     return redirect(route('index'));
    // }
    }
}
