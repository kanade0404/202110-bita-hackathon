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
        DB::table("events")->insert(["name" => "宇宙カタン", "description" => "宇宙カタンやります", "club_id" => "1", "create_user_id" => 1, "place" => "シコウラボ"]);
        DB::table("events")->insert(["name" => "アルティメット人狼", "description" => "アルティメット人狼やります", "club_id" => "16", "create_user_id" => 2, "place" => "シコウラボ and zoom",]);
    }
}
