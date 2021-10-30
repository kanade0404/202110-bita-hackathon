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
        DB::table("users")->insert(["id" => "1", "name" => "あ", "email" => "hyeonho_yoon@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "2", "name" => "い", "email" => "hyeonho_yoon01@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "3", "name" => "う", "email" => "hyeonho_yoon02@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "4", "name" => "え", "email" => "hyeonho_yoon03@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "5", "name" => "お", "email" => "hyeonho_yoon04@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "6", "name" => "か", "email" => "hyeonho_yoon05@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "7", "name" => "き", "email" => "hyeonho_yoon06@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "8", "name" => "く", "email" => "hyeonho_yoon07@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "9", "name" => "け", "email" => "hyeonho_yoon08@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "10", "name" => "こ", "email" => "hyeonho_yoon09@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "11", "name" => "さ", "email" => "hyeonho_yoon10@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "12", "name" => "し", "email" => "hyeonho_yoon11@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "13", "name" => "す", "email" => "hyeonho_yoon12@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "14", "name" => "せ", "email" => "hyeonho_yoon13@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "15", "name" => "そ", "email" => "hyeonho_yoon14@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "16", "name" => "た", "email" => "hyeonho_yoon15@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "17", "name" => "ち", "email" => "hyeonho_yoon16@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "18", "name" => "つ", "email" => "hyeonho_yoon17@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "19", "name" => "て", "email" => "hyeonho_yoon18@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "20", "name" => "と", "email" => "hyeonho_yoon19@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "21", "name" => "な", "email" => "hyeonho_yoon20@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "22", "name" => "に", "email" => "hyeonho_yoon21@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "23", "name" => "ぬ", "email" => "hyeonho_yoon22@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "24", "name" => "ね", "email" => "hyeonho_yoon23@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "25", "name" => "の", "email" => "hyeonho_yoon24@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "26", "name" => "は", "email" => "hyeonho_yoon25@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "27", "name" => "ひ", "email" => "hyeonho_yoon26@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "28", "name" => "ふ", "email" => "hyeonho_yoon27@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "29", "name" => "へ", "email" => "hyeonho_yoon28@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "30", "name" => "ほ", "email" => "hyeonho_yoon29@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "31", "name" => "ま", "email" => "hyeonho_yoon30@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "32", "name" => "み", "email" => "hyeonho_yoon31@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "33", "name" => "む", "email" => "hyeonho_yoon32@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "34", "name" => "め", "email" => "hyeonho_yoon33@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "35", "name" => "も", "email" => "hyeonho_yoon34@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "36", "name" => "や", "email" => "hyeonho_yoon35@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "37", "name" => "ゆ", "email" => "hyeonho_yoon36@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "38", "name" => "よ", "email" => "hyeonho_yoon37@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "39", "name" => "ら", "email" => "hyeonho_yoon38@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "40", "name" => "り", "email" => "hyeonho_yoon39@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "41", "name" => "る", "email" => "hyeonho_yoon40@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "42", "name" => "れ", "email" => "hyeonho_yoon41@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "43", "name" => "ろ", "email" => "hyeonho_yoon42@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "44", "name" => "わ", "email" => "hyeonho_yoon43@bita.jp", "password" => "123456"]);
        DB::table("users")->insert(["id" => "45", "name" => "ん", "email" => "hyeonho_yoon44@bita.jp", "password" => "123456"]);
        DB::table("club_members")->insert(["user_id" => "1", "club_id" => "1"]);
        DB::table("club_members")->insert(["user_id" => "2", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "3", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "4", "club_id" => "4"]);
        DB::table("club_members")->insert(["user_id" => "5", "club_id" => "5"]);
        DB::table("club_members")->insert(["user_id" => "6", "club_id" => "6"]);
        DB::table("club_members")->insert(["user_id" => "7", "club_id" => "7"]);
        DB::table("club_members")->insert(["user_id" => "8", "club_id" => "8"]);
        DB::table("club_members")->insert(["user_id" => "9", "club_id" => "9"]);
        DB::table("club_members")->insert(["user_id" => "10", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "11", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "12", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "13", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "14", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "15", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "16", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "17", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "18", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "19", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "20", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "21", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "22", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "23", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "24", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "25", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "26", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "27", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "28", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "29", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "30", "club_id" => "2"]);
        DB::table("club_members")->insert(["user_id" => "31", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "32", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "33", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "34", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "35", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "36", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "37", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "38", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "39", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "40", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "41", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "42", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "43", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "44", "club_id" => "3"]);
        DB::table("club_members")->insert(["user_id" => "45", "club_id" => "3"]);
        DB::table("events")->insert(["name" => "ボードゲーム", "description" => "ボードゲームやります", "club_id" => "1"]);
        DB::table("events")->insert(["name" => "switch", "description" => "switchやります", "club_id" => "2"]);
        DB::table("events")->insert(["name" => "釣り", "description" => "釣りやります", "club_id" => "3"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-30", "start_time" => "08:00:00", "end_time" => "18:00:00", "event_id" => "1"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-31", "start_time" => "08:00:00", "end_time" => "18:00:00", "event_id" => "2"]);
        DB::table("event_schedules")->insert(["event_date" => "2021-10-31", "start_time" => "08:00:00", "end_time" => "18:00:00", "event_id" => "3"]);
        DB::table("fix_event_notification_configs")->insert(["event_id" => "1", "notify_before_date" => "0", "notify_time" => "18"]);
        DB::table("fix_event_notification_configs")->insert(["event_id" => "2", "notify_before_date" => "0", "notify_time" => "19"]);        
        DB::table("fix_event_notification_configs")->insert(["event_id" => "3", "notify_before_date" => "0", "notify_time" => "20"]);       
    }
}
