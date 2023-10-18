<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function showCurriculums(Request $request){
        $model = new Curriculum();
        $curriculums = $model->getCurriculums($request);//テストでは$requestを整数に変更

        return view('curriculums',['curriculums' => $curriculums]);
    }

    public function flgChenge(Request $request){

        $recordId = $request->input('id');
        DB::beginTransaction();

        try{
            $model = new Curriculum();
            $model->flgChenge($recordId);
            DB::commit();
        }catch(\Exception $e){
            \Log::debug($e->getMessage());
            DB::rollback();

            return back();
        }
    }
}
