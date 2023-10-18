<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function showArticles(){
        $articleModel = new Article();
        $bannerModel = new Banner();
        $articles = $articleModel->getArticles();
        $banners = $bannerModel->getBanners();

        return view('top',compact('articles', 'banners'));
    }

}
