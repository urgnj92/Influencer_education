<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassesName extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 小学1年生から高校3年生までのデータを生成
        for ($grade = 1; $grade <= 12; $grade++) {
            if($grade <= 6){
                DB::table('classes')->insert([
                    'name' => '小学' . $grade . '年生',
                ]);
            }else if($grade <= 9){
                DB::table('classes')->insert([
                    'name' => '中学' . $grade-6 . '年生',
                ]);
            }else{
                DB::table('classes')->insert([
                    'name' => '高校' . $grade-9 . '年生',
                ]);
            }
        }
    }
}
