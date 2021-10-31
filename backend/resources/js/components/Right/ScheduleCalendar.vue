<template>
  <v-row class="scheduleCalendar">
    <v-col>
      <v-sheet height="40">
        <v-toolbar flat class="toolBar" height="40">
          <v-btn
            outlined
            color="grey darken-2"
            class="todayButton"
            @click="setToday"
          >
            今日
          </v-btn>
          <div class="monthButtons">
            <v-btn
              fab
              text
              small
              color="grey darken-2"
              @click="prev"
            >
              <v-icon small>
                mdi-chevron-left
              </v-icon>
            </v-btn>
            <v-toolbar-title v-if="$refs.calendar">
              {{ $refs.calendar.title }}
            </v-toolbar-title>
            <v-btn
              fab
              text
              small
              color="grey darken-2"
              @click="next"
            >
              <v-icon small>
                mdi-chevron-right
              </v-icon>
            </v-btn>
          </div>
        </v-toolbar>
      </v-sheet>
      <v-sheet height="300">
        <v-calendar
          ref="calendar"
          v-model="focus"
          color="primary"
          :events="events"
          :type="type"
          @click:event="showEvent"
          @change="updateRange"
        ></v-calendar>
      </v-sheet>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'ScheduleCalendar',
  props: {
    registeredEventList: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      focus: '',
      type: 'month',
      selectedEvent: {},
      selectedElement: null,
      events: [],
    }
  },
  mounted () {
    this.$refs.calendar.checkChange()
  },
  methods: {
    setToday () {
      this.focus = ''
    },
    prev () {
      this.$refs.calendar.prev()
    },
    next () {
      this.$refs.calendar.next()
    },
    showEvent ({ nativeEvent, event }) {
      nativeEvent.stopPropagation();
      this.$emit('calendarSelected', event.id);
    },
    updateRange ({ start, end }) {
      const events = []

      const min = new Date(`${start.date}T00:00:00`);
      const max = new Date(`${end.date}T23:59:59`);
      const eventCount = this.registeredEventList.length;

      this.registeredEventList.forEach(element => {
        // datetimeを加工してYYYY-MM-DD形式にして first に設定する
        const splitDate = element.datetime.split('/');
        const targetMonth = splitDate[0];
        const targetDate = splitDate[1].split('（')[0];

        const nowDate = new Date();
        const nowYear = nowDate.getFullYear();
        const nowMonth = nowDate.getMonth() + 1;

        const targetYear = targetMonth >= nowMonth ? nowYear : nowYear + 1;
        const first = `${targetYear}-${targetMonth}-${targetDate}`;

        events.push({
          id: element.event_id,
          name: element.event_name,
          start: first,
          timed: false,
        });
      });

      this.events = events;
    },
  },
}
</script>

<style lang="scss" scoped>
.toolBar {
  position: relative;
}

.todayButton {
  position: absolute;
  left: 20px;
  top: 50%;
  margin-top: -11px;
}

.monthButtons {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

</style>

<style lang="scss">
@import '../../../sass/variables';
.scheduleCalendar {
  margin: 0 12px!important;

  .theme--light.v-toolbar.v-sheet {
    background: $secondary;
  }

.v-btn__content {
    font-size: 10px;
    color: $font-base-color;
  }

  .v-calendar-weekly__day-label {
    .v-btn {
      font-size: 10px;
      text-transform: none;
    }
    .v-btn__content {
      font-size: 10px;
      color: $font-base-color;
    }
  }

  .v-calendar-weekly__day {
    width: 36px;
  }

  .v-btn:not(.v-btn--round).v-size--default {
    border: 1px solid $font-base-color;
    background: #fff;
    height: 22px;
    min-width: 46px;
    padding: 0 10px;
  }

  .v-toolbar__title {
    font-size: 14px;
    color: #fff;
  }

  .theme--light.v-btn.v-btn--has-bg {
    background: none;
  }

  .v-btn--fab.v-size--small {
    height: 16px;
    width: 16px;

    &.primary {
      background-color: $secondary !important;
      border-color: none !important;

      .v-btn__content {
        color: #fff !important;
      }
    }
  }

  .v-calendar-weekly__day-label {
    margin-top: 0;
  }

  .v-calendar-weekly__day{
    padding: 0 0 0 4px;
  }

  .v-btn > .v-btn__content .v-icon.mdi-chevron-left,
  .v-btn > .v-btn__content .v-icon.mdi-chevron-right {
    color: #fff;
  }

  .v-calendar .v-event {
    background: $primary;
    color: #fff;
    font-weight: bold;
    font-size: 10px;
  }

  .theme--light.v-calendar-weekly .v-calendar-weekly__day.v-outside {
    color: #d0d0d0;
  }
}
</style>
