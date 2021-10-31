<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 1, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 2, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 3, "participation_status" => "N"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 4, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 5, "participation_status" => "U"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 6, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 1, "event_schedule_id" => 7, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 1, "participation_status" => "N"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 2, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 3, "participation_status" => "U"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 4, "participation_status" => "U"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 5, "participation_status" => "Y"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 6, "participation_status" => "N"]);
        DB::table("member_schedules")->insert(["user_id" => 2, "event_schedule_id" => 7, "participation_status" => "U"]);
    }
}
