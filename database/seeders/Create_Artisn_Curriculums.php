<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Create_Artisn_Curriculums extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        

        DB::table('users')->insert([
            'name' => 'TNG',
            'name_kana' => 'TNG',
            'email' => 'abc@gmail.com',
            'password' => '123456789',
            'created_at' => now()
        ]);

        DB::table('articles')->insert([
            [
                'title' => 'test1',
                'posted_date' => now(),
                'article_contents' => 'お知らせ１つ目の内容です。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。',
                'created_at' => now()
            ],
            [
                'title' => 'test2',
                'posted_date' => now(),
                'article_contents' => 'お知らせ２つ目の内容です。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。',
                'created_at' => now()
            ]
        ]);

        DB::table('curriculums')->insert([
            'title' => 'テストタイトル',
            'thumbnail' => 'サムネイルタイトル',
            'description' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
            'video_url' => '../public/storage/videos/rocket_-_235 (720p).mp4',
            'alway_delivery_flg' => 1,
            'classes_id' => 3,
            'created_at' => now()
        ]);
        
        DB::table('curriculum_progress')->insert([
            'users_id' => 1,
            'curriculumus_id' => 1,
            'clear_flg' => 0,
            'created_at' => now()
        ]);

        DB::table('delivery_times')->insert([
            'curriculums_id' => 1,
            'delivery_from' => now(),
            'delivery_to' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
