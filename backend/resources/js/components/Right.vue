<template>
  <div class="rightColumn">
    <h2 class="calendarTitle">あなたの部活カレンダー</h2>
    <schedule-calendar
      :registeredEventList="eventList"
      @calendarSelected="calendarSelected"
    />
    <registered-event-list
      :registeredEventList="eventList"
      :selectedItemId="selectedItemId"
    />
  </div>
</template>

<script>
import axios from 'axios';
import ScheduleCalendar from  './ScheduleCalendar.vue';
import RegisteredEventList from './RegisteredEventList.vue';

export default {
  name: 'Right',
  components: {
    ScheduleCalendar,
    RegisteredEventList,
  },
  data() {
    return {
      eventList: [
        {
          event_id: '001',
          event_name: '休日ボドゲ会',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '2021年11月2日 19:00〜'
        },
        {
          event_id: '002',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '2021年11月2日 19:00〜'
        },
        {
          event_id: '003',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '2021年11月2日 19:00〜'
        },
        {
          event_id: '004',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '2021年11月2日 19:00〜'
        },
        {
          event_id: '005',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '2021年11月2日 19:00〜'
        },
      ],
      selectedItemId: '',
    }
  },
  mounted () {
    // TODO: 登録済みイベント取得APIを叩いてeventListに情報設定

  },
  methods: {
    calendarSelected(id) {
      this.selectedItemId = id;
    },
  },
}
</script>

<style lang="scss" scoped>
.rightColumn {
  background: #fff;
  height: 100vh;
  overflow-y: scroll;
  padding: 0;
}

.calendarTitle {
  font-size: 16px;
  text-align: center;
  margin: 24px 24px 0;
}
</style>
