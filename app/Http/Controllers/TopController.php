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
        //$bannerChenge = count($banners->image);

        /*$count = 0;
        foreach($banners as $banner){
            $count++;
        }*/

        $count = count($banners);
        $classCount = 1;

        return view('top',compact('articles', 'banners', 'count', 'classCount'));
    }

}
