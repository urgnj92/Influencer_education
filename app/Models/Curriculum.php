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
      ->select('curriculums.*', 'classes.name as class_name')
      ->where('curriculums.id', $data)
      ->get();

    return $curriculums;
}

}
