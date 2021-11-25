from mysql.connector import connect
from contextlib import closing
import pusher

def main() -> None:
    config = {
        'host': '127.0.0.1',
        'database': 'laravel_local',
        'user': 'phper',
        'password': 'secret',
        'charset' : 'utf8'
    }
    with closing(connect(**config)) as conn:
        with closing(conn.cursor()) as cursor:
            #本番 cursor.execute("select events.id as event_id,events.name as event_name,clubs.name as club_name,event_schedlues.event_date as event_date,event_schedlues.start_time as start_time,event_schedlues.end_time as end_time from laravel_local.fix_event_notification_configs notification join laravel_local.events events on notification.event_id = events.id join laravel_local.event_schedules event_schedlues on notification.event_id = event_schedlues.event_id left join laravel_local.clubs on event_schedlues.id = clubs.id where notification.id = events.fix_schedule_id and datediff(cast(DATE_ADD(NOW(), INTERVAL 9 HOUR) as date),event_schedlues.event_date) = notification.notify_before_date and DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 9 HOUR),'%H') = notification.notify_time")
            cursor.execute("select events.id as event_id,events.name as event_name,clubs.name as club_name,event_schedlues.event_date as event_date,event_schedlues.start_time as start_time,event_schedlues.end_time as end_time from laravel_local.fix_event_notification_configs notification join laravel_local.events events on notification.event_id = events.id join laravel_local.event_schedules event_schedlues on notification.event_id = event_schedlues.event_id left join laravel_local.clubs on event_schedlues.id = clubs.id where notification.id = events.fix_schedule_id")
            for row in cursor.fetchall():
                print(row)
                type(row)
# (1, 'ボドゲ', 'ボードゲーム部', datetime.date(2021, 10, 30), datetime.timedelta(seconds=28800), datetime.timedelta(seconds=64800))
if __name__ == "__main__":
    main()