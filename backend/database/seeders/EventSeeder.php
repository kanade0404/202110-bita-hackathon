<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("events")->insert(["name" => "宇宙カタン", "description" => "宇宙カタンやります", "club_id" => "1", "create_user_id" => 1, "place" => "シコウラボ", "created_at" => "2021-10-01 11:00:00"]);
        DB::table("events")->insert(["name" => "アルティメット人狼", "description" => "アルティメット人狼やります", "club_id" => "16", "create_user_id" => 2, "place" => "シコウラボ and zoom", "created_at" => "2021-10-04 15:30:00"]);
        DB::table("events")->insert(["name" => "ドミニオン", "description" => "ドミニオンやるよ", "club_id" => "1", "create_user_id" => 1, "place" => "シコウラボ", "created_at" => "2021-10-06 17:30:00"]);
        DB::table("events")->insert(["name" => "dixitやるよ", "description" => "dixitやりたい人集まれ！", "club_id" => "1", "create_user_id" => 1, "place" => "シコウラボ", "created_at" => "2021-10-08 19:30:00"]);
    }
}
