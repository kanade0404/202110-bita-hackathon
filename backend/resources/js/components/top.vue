<template>
  <div class="wrapper">
    <div class="left">
      <LeftProfile />
    </div>
    <div class="center">
      <Center />
    </div>
    <div class="right">
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import LeftProfile from './LeftProfile.vue';
import Center from './Center.vue';

export default {
  components: {
    LeftProfile,
    Center,
  },
  data() {
    return {
      profileInfo: {
        thumbnail_path: 'https://mikan.bita.jp/img/members_img/15656647750seiya_sakata_mikan.jpg',
        userName: '',
        clubNames: ['部活名', '部活名', '部活名', '部活名'],
      },
    };
  },
}
</script>

<style lang="scss" scoped>
.wrapper {
  display: flex;
  justify-content: space-around;
  .center {
    width: 500px
  }
}
</style>