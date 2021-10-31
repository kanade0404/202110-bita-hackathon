<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = DB::table("events")->select(DB::raw("events.id as event_id, events.name as event_name, events.description as description, clubs.name as club_name, event_date, start_time, end_time"))->join("event_schedules", "events.id", "=", "event_schedules.event_id")
            ->join("member_schedules", "member_schedules.event_schedule_id", "=", "event_schedules.id")
            ->join("clubs", "clubs.id", "=", "events.club_id")
            ->join("club_members", "club_members.club_id", "=", "clubs.id")
            ->join("users", "users.id", "=", "club_members.user_id")
            ->where("events.fix_schedule_id","!=", null)
            ->where("users.id", "=", $id)
            ->get()
            ->toArray();
        return response(array_map(function ($d) {
            return [
                "event_id" => $d->event_id,
                "event_name" => $d->event_name,
                "event_description" => $d->description,
                "club_name" => $d->club_name,
                "datetime" => $d->event_date . $d->start_time . $d->end_time,
            ];
        }, $data));
    }
}
