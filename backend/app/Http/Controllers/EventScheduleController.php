<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventScheduleController extends Controller
{
    public function index(Request $request)
    {
//        $data = DB::table("event_schedules")
//            ->select(DB::raw())
//            ->join("events", "events.id", "event_schedules.event_id")
//            ->join("member_schedules", "member_schedules.event_schedule_id", "=", "event_schedules.id")
//            ->join("clubs", "clubs.id", "=", "events.club_id")
//            ->join("club_members", "club_members.club_id", "=", "clubs.id")
//            ->join("users", "users.id", "=", "club_members.user_id")
//            ->get()->toArray();
        $mockData = [
            [
                "event" => [
                    "id" => 1,
                    "name" => "カタン",
                    "create_user" => [
                        "name" => "坂田誠也",
                        "thumbnail_path" => "seiya_sakata_mikan.jpg"
                    ],
                    "create_date" => "10月24日",
                    "create_time" => "10:10"
                ],
                "club" => [
                    "id" => 1,
                    "name" => "ボドゲ部"
                ],
                "event_schedules" => [
                    ["id" => 1, "start_time" => "13:00", "end_time" => "18:00", "date" => "11/6(土)", "member_schedules" => [["user_name" =>  "坂田誠也", "participation_status"=> "Y"], ["user_name" =>  "星佳杏", "participation_status" => "U"]]],
                    ["id" => 2, "start_time" => "14:00", "end_time" => "20:00", "date" => "11/7(日)", "member_schedules" => [["user_name" =>  "坂田誠也", "participation_status"=> "N"], ["user_name" =>  "星佳杏", "participation_status" => "Y"]]]
                ]
            ],
            [
                "event" => [
                    "id" => 1,
                    "name" => "Dixitやる",
                    "create_user" => [
                        "name" => "坂田誠也",
                        "thumbnail_path" => "seiya_sakata_mikan.jpg"
                    ],
                    "create_date" => "11月25日",
                    "create_time" => "10:50"
                ],
                "club" => [
                    "id" => 1,
                    "name" => "ボドゲ部"
                ],
                "event_schedules" => [
                    ["id" => 1, "start_time" => "15:00", "end_time" => "19:00", "date" => "12/6(土)", "member_schedules" => [["user_name" =>  "坂田誠也", "participation_status"=> "Y"], ["user_name" =>  "星佳杏", "participation_status" => "U"]]],
                    ["id" => 2, "start_time" => "17:00", "end_time" => "21:00", "date" => "12/7(日)", "member_schedules" => [["user_name" =>  "坂田誠也", "participation_status"=> "N"], ["user_name" =>  "星佳杏", "participation_status" => "Y"]]]
                ]
            ]
        ];
        return response($mockData);
    }
}
