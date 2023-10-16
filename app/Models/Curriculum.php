<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Curriculum extends Model
{
  use HasFactory;

  public function getCurriculums($data){
    $curriculums = DB::table('curriculums')
      ->join('classes', 'curriculums.classes_id', '=', 'classes.id')
      ->join('curriculum_progress', 'curriculums.id', '=', 'curriculums.id')
      ->select(
        'curriculums.*',
        'classes.name as class_name',
        'curriculum_progress.clear_flg as clear_flg'
        )
      ->where('curriculums.id', $data)
      ->get();

    return $curriculums;
  }
  
  public function flgChenge($recordId){
    DB::table('curriculum_progress')
      ->where('id', $recordId)
      ->update([
        'clear_flg' => 1
      ]);
}

}
