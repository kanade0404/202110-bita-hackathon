<template>
  <div class="wrapper">
    <div class="left">
      <Left :profile-info="profileInfo" />
    </div>
    <div class="center">
      <Center />
    </div>
    <div class="right">
      <Right />
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Left from './Left.vue';
import Center from './Center.vue';
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
        thumbnail_path: 'https://mikan.bita.jp/img/members_img/15656647750seiya_sakata_mikan.jpg',
        userName: 'さかってぃーさん',
        clubNames: ['ボドゲ', '映画', 'テニス', 'お茶ぶ'],
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