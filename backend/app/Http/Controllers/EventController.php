<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = DB::select("SELECT events.id AS event_id,events.name AS event_name,events.description AS event_description,clubs.`name` AS club_name,(SELECT CONCAT(DATE_FORMAT(event_schedules.event_date,'%m月%d日'),'(',ELT(WEEKDAY(event_schedules.event_date)+1,'月','火','水','木','金','土','日'),')',TIME_FORMAT(start_time,'%H:%i'),'〜',TIME_FORMAT(end_time,'%H:%i'))AS date FROM event_schedules JOIN events ON events.id=event_schedules.event_id WHERE event_schedules.id=events.fix_schedule_id)AS datetime FROM events INNER JOIN event_schedules ON event_schedules.id=events.fix_schedule_id INNER JOIN clubs ON clubs.id=events.club_id WHERE events.id IN(SELECT events.id FROM events INNER JOIN event_schedules ON events.id=event_schedules.event_id INNER JOIN member_schedules ON member_schedules.event_schedule_id=event_schedules.id INNER JOIN clubs ON clubs.id=events.club_id WHERE member_schedules.user_id=2 AND fix_schedule_id IS NOT NULL GROUP BY events.id);");
        return response($data);
    }
}
