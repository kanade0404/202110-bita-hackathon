<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClubMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("club_members")->insert(["user_id" => "1", "club_id" => "1"]);
        DB::table("club_members")->insert(["user_id" => "1", "club_id" => "6"]);
        DB::table("club_members")->insert(["user_id" => "2", "club_id" => "1"]);
        DB::table("club_members")->insert(["user_id" => "2", "club_id" => "6"]);
    }
}
