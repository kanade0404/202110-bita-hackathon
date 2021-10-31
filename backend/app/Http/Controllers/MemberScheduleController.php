<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberScheduleController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->input("user_id");
        $eventParticipantInfo = $request->input("event_participant_info");
        $comment = $request->input("comment");
        DB::table("member_schedules")->insert(array_map(static function ($data) use ($userId, $comment) {
            return [
                "user_id" => $userId,
                "comment" => $comment,
                "participation_status" => $data->participation_status,
                "event_schedule_id" => $data->event_schedule_id
            ];
        }, $eventParticipantInfo));
        return response();
    }
}
