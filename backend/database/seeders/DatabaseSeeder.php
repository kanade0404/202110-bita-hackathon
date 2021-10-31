<?php

namespace Database\Seeders;

use App\Models\ClubMember;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ClubSeeder::class,
            UserSeeder::class,
            ClubMemberSeeder::class,
            EventSeeder::class,
            EventScheduleSeeder::class,
            MemberScheduleSeeder::class,
            FixEventNotificationConfigSeeder::class,
        ]);
        DB::table("events")->where("id","=", 2)->update(["fix_schedule_id" => 4]);
        DB::table("events")->where("id","=", 3)->update(["fix_schedule_id" => 7]);
        DB::table("events")->where("id","=", 4)->update(["fix_schedule_id" => 15]);
    }
}
