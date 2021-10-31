<template>
  <div class="wrapper">
    <div class="left">
      <Left v-if="showProfileInfo" :profile-info="profileInfo" />
    </div>
    <div class="center">
      <Center v-if="showEventList" :event-data-list="eventDataList" />
    </div>
    <div class="right">
      <Right :user-id="userId" />
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
      profileInfo: {},
      // プロフィール取得APIのパスに使う
      userId: '1',
      showProfileInfo: false,
      showEventList: false,
      eventDataList: [],
    };
  },
  created() {
    this.getEventInfo();
    this.getUserProfile();
  },
  methods: {
    getEventInfo() {
      axios
        .get('/api/events')
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
    getUserProfile() {
      this.profileInfo = {
        "user_name": "さかってぃー",
        "club_name": ["ボドげ","お茶ぶ","テニスぶ","ハッカソン部"],
        "thumbnail_path": "https://mikan.bita.jp/img/members_img/15656647750seiya_sakata_mikan.jpg"
      };
      this.showProfileInfo = true;
      // axios
      //   .get(`/api/user/${userId}`)
      //   .then((response) => {
      //     this.profileInfo = response.data;
      //     this.showProfileInfo = true;
      //   })
      //   .catch(() => {
      //     throw Error;
      //   })
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
    background: #ffffff;
    flex-grow: 0.5;
  }
  .center {
    padding-top: 30px;
    width: 500px;
    height: 100%;
    border-left: 1px solid $secondary;
    border-right: 1px solid $secondary;
    flex-grow: 1.25;
    overflow-y: scroll;
  }
  .right {
    flex-grow: 1.25;
  }
}
</style>