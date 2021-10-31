<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("event_schedules")->insert(["event_date" => "2021-10-30", "start_time" => "10:00:00", "end_time" => "18:00:00", "event_id" => "1"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-30", "start_time" => "11:00:00", "end_time" => "19:00:00", "event_id" => "1"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-30", "start_time" => "12:00:00", "end_time" => "20:00:00", "event_id" => "1"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-28", "start_time" => "11:00:00", "end_time" => "17:00:00", "event_id" => "2"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-29", "start_time" => "11:00:00", "end_time" => "17:00:00", "event_id" => "2"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-30", "start_time" => "11:00:00", "end_time" => "17:00:00", "event_id" => "2"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-31", "start_time" => "11:00:00", "end_time" => "17:00:00", "event_id" => "2"]);
    }
}
