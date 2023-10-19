<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CurriculumProgress extends Model
{
    use HasFactory;

    protected $table = 'curriculum_progress';
    protected $primaryKey = 'id';
    protected $guarded = array('id');

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'classes_id');
    }

    public function getGrades() {
        // classesテーブルからデータを取得
        $grades = DB::table('grade')->get();
        return $grades;
    }

    
}
