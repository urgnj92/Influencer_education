<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    //
    public function showArticles(){
        $model = new Article();
        $articles = $model->getArticles();

        return view('top',['articles' => $articles]);
    }
}
