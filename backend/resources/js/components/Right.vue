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
import ScheduleCalendar from  './Right/ScheduleCalendar.vue';
import RegisteredEventList from './Right/RegisteredEventList.vue';

export default {
  name: 'Right',
  components: {
    ScheduleCalendar,
    RegisteredEventList,
  },
  props: {
    userId: {
      type: String,
      required: true,
    }
  },
  data() {
    return {
      eventList: [],
      selectedItemId: '',
    }
  },
  created () {
    this.getRegisterdEventList();
  },
  methods: {
    calendarSelected(id) {
      this.selectedItemId = id;
    },
    getRegisterdEventList() {
      const data = [
        {
          event_id: '001',
          event_name: '休日ボドゲ会',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '10/31（日）11:00〜17:00',
          place: 'シコウラボ',
        },
        {
          event_id: '002',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '11/3（水）11:00〜17:00',
          place: 'INDIGO',
        },
        {
          event_id: '003',
          event_name: 'テニス部',
          event_description: '休日ボドゲ会やります',
          club_name: 'テニス部',
          datetime: '11/13（土）11:00〜17:00',
          place: '門前仲町コート',
        },
        {
          event_id: '004',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '11/22（月）11:00〜17:00'
        },
        {
          event_id: '005',
          event_name: 'アルティメット人狼やりませんか？',
          event_description: '休日ボドゲ会やります',
          club_name: 'ボドゲ部',
          datetime: '9/27（金）11:00〜17:00'
        },
      ];
      this.eventList = [...data];
      // axios
      //   .get(`/api/events/${this.userId}`)
      //   .then((response) => {
      //     this.eventList = [...response.data];
      //     console.log(this.eventList);
      //   })
      //   .catch(() => {
      //     throw Error;
      //   });
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
