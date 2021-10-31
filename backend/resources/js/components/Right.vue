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
      axios
        .get(`/api/events/${this.userId}`)
        .then((response) => {
          this.eventList = [...response.data];
          console.log(this.eventList);
        })
        .catch(() => {
          throw Error;
        });
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
