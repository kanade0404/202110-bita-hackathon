<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 部テーブル
         */
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        /**
         * 部活イベントテーブル
         */
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->unsignedBigInteger("club_id");
            $table->foreign("club_id")->references("id")->on("clubs");
            $table->unsignedBigInteger("create_user_id");
            $table->foreign("create_user_id")->references("id")->on("users");
            $table->timestamps();
        });
        /**
         * 部活メンバーテーブル
         */
        Schema::create('club_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("club_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("club_id")->references("id")->on("clubs");
            $table->timestamps();
        });
        /**
         * イベントの開催予定スケジュールテーブル
         */
        Schema::create('event_schedules', function (Blueprint $table) {
            $table->id();
            $table->date("event_date");
            $table->time("start_time");
            $table->time("end_time");
            $table->unsignedBigInteger("event_id");
            $table->foreign("event_id")->references("id")->on("events");
            $table->timestamps();
        });
        /**
         * ユーザーのスケジュールテーブル
         */
        Schema::create('member_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->unsignedBigInteger("event_schedule_id");
            $table->foreign("event_schedule_id")->references("id")->on("event_schedules");
            $table->enum("participation_status", ["PARTICIPATION", "NO_PARTICIPATION", "UNKNOWN"]);
            $table->text("comment");
            $table->timestamps();
        });
        Schema::create('fix_event_notification_configs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("event_id");
            $table->foreign("event_id")->references("id")->on("events");
            $table->unsignedInteger("notify_before_date");
            $table->unsignedInteger("notify_time");
            $table->timestamps();
        });
        Schema::table("events", function (Blueprint $table) {
            $table->unsignedBigInteger("fix_schedule_id")->nullable();
            $table->foreign("fix_schedule_id")->references("id")->on("event_schedules");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("events", function (Blueprint $table) {
            $table->dropForeign("events_fix_schedule_id_foreign");
        });
        print_r("drop events_fix_schedule_id_foreign");
        Schema::table("member_schedules", function (Blueprint $table) {
            $table->dropForeign("member_schedules_event_schedule_id_foreign");
        });
        print_r("drop member_schedules_event_schedule_id_foreign");
        Schema::dropColumns("events", ["fix_schedule_id"]);
        print_r("drop events");
        Schema::dropIfExists('fix_event_notification_configs');
        print_r("drop fix_event_notification_configs");
        Schema::dropIfExists('event_schedules');
        print_r("drop event_schedules");
        Schema::dropIfExists('club_members');
        print_r("drop club_members");
        Schema::dropIfExists('events');
        print_r("drop events");
        Schema::dropIfExists('clubs');
        print_r("drop clubs");
    }
}
