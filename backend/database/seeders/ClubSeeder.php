<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("clubs")->insert(["name" => "ボードゲーム部"]);
        DB::table("clubs")->insert(["name" => "switch部"]);
        DB::table("clubs")->insert(["name" => "釣り部"]);
        DB::table("clubs")->insert(["name" => "映画部"]);
        DB::table("clubs")->insert(["name" => "あるく部"]);
        DB::table("clubs")->insert(["name" => "将棋部"]);
        DB::table("clubs")->insert(["name" => "リアル脱出部"]);
        DB::table("clubs")->insert(["name" => "SF部"]);
        DB::table("clubs")->insert(["name" => "キャンドル部"]);
        DB::table("clubs")->insert(["name" => "ダーツライ部"]);
        DB::table("clubs")->insert(["name" => "社会科見学部"]);
        DB::table("clubs")->insert(["name" => "テニス部"]);
        DB::table("clubs")->insert(["name" => "みずあそび部"]);
        DB::table("clubs")->insert(["name" => "テニス部"]);
        DB::table("clubs")->insert(["name" => "ワシントン・ビターズ（バスケ部）"]);
        DB::table("clubs")->insert(["name" => "人狼部"]);
        DB::table("clubs")->insert(["name" => "ボウリング部"]);
    }
}
