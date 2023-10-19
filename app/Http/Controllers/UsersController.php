<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use App\Models\CurriculumProgress;
use App\Models\Curriculum;
use App\Models\Article;
use App\Models\User;


class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        // $this->middleware('auth');
        // login/register機能の一時除外のため上記を下記に書き換え
        $this->middleware('auth')->except(true);
    }
    
    
    // 授業進捗
    public function index(Request $request)
    {
        // このままだと全部のユーザーと学年が最初の項目に入ってしまうので、１学年ずつ表示できるようにする

        // インスタンス生成
        $model = new User;
        // usersテーブルからデータを取得
        $users = $model->getUsers();

        // インスタンス生成
        $model = new CurriculumProgress;
        // classesテーブルからデータを取得
        $grades = $model->getGrades();

        $model = new Curriculum;
        $curriculums = $model->getTitle();
        $class_id = $model->getId();

        
        
        return view('curriculum_progress', ['grades'=> $grades], compact('users', 'curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // お知らせ一覧
    public function show($id)
    {
        // インスタンス生成
        $model = new Article;
        $articles = $model->articlesGetList($id);
    
        return view('notice', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // パスワード変更
    public function update(Request $request)
    {
        return view ('password');

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
    }
}
