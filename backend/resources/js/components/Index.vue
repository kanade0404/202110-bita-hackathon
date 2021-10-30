<template>
  <div class="wrapper">
    <div class="left">
      <Left :profile-info="profileInfo" />
    </div>
    <div class="center">
      <Center v-if="showEventList" :event-data-list="eventDataList" />
    </div>
    <div class="right">
      <Right />
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Left from './Left.vue';
import Center from './Center/Center.vue';
import Right from './Right.vue';

export default {
  components: {
    Left,
    Center,
    Right,
  },
  data() {
    return {
      profileInfo: {
        thumbnailPath: 'https://mikan.bita.jp/img/members_img/15656647750seiya_sakata_mikan.jpg',
        userName: 'さかってぃーさん',
        clubNames: ['ボドゲ', '映画', 'テニス', 'お茶ぶ'],
      },
      showProfileInfo: false,
      showEventList: false,
      eventDataList: [
        {
          event: {
            id: '',
            name: '',
            create_user: {
              name: '',
              thumbnail_path: '',
            }
          },
          club: {
            id: '',
            name: '',
          },
          event_schedules: {
            id: '',
            participation_schedule: [
              {
                date: '',
                start_time: '',
                end_time: '',
              },
            ]
          },
          fix_event_schedule: {
            event_name: '',
            date: '',
            start_time: '',
            end_time: '',
          },
          member_schedules: [
            {
              user_name: '',
              participation_status: '',
            }
          ]
        },
      ]
    };
  },
  mounted() {
    this.getEventInfo();
  },
  methods: {
    getEventInfo() {
      axios
        .get('/events')
        .then((response) => {
          response.data.event_info.forEach((eventData, index) => {
            this.$set(this.eventDataList, index, eventData);
          });
          this.showEventList = true;
        })
        .catch(() => {
          throw Error;
        })
    },
  },
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables';

.wrapper {
  display: flex;
  justify-content: space-around;
  height: 100%;
  .left {
    background: #f1f1f1;
    flex-grow: 0.5;
  }
  .center {
    padding-top: 30px;
    width: 500px;
    height: 100%;
    border-left: 1px solid $secondary;
    border-right: 1px solid $secondary;
    flex-grow: 1.25;
  }
  .right {
    flex-grow: 1.25;
  }
}
</style>