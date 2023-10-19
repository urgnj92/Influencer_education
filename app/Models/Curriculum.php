<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = 'curriculums';
    
    public function getTitle() {
        // curriculumsテーブルからデータを取得
        $curriculums = DB::table('curriculums')->get();
        return $curriculums;
    }

    public function getId() {
        // curriculumsテーブルからデータを取得
        $curriculums = DB::table('curriculums')->get();
        return $curriculums;
    }
}
