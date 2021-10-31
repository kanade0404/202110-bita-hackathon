<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixEventNotificationConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("fix_event_notification_configs")->insert(["event_id" => "1", "notify_before_date" => "0", "notify_time" => "18"]);
        DB::table("fix_event_notification_configs")->insert(["event_id" => "2", "notify_before_date" => "0", "notify_time" => "19"]);
    }
}
