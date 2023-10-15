<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function showCurriculums(Request $request){
        $model = new Curriculum();
        $curriculums = $model->getCurriculums(1);

        return view('curriculums',['curriculums' => $curriculums]);
    }
}
