<template>
  <div class="profileWrapper">
    <div>
      <div class="profileImg"><img :src="profileInfo.thumbnailPath" width="100" height="100"></div>
      <div class="centerItem name">{{ profileInfo.userName }}</div>
    </div>
    <div>
      <ul class="clubList">
        <li v-for="clubName in profileInfo.clubNames" :key="clubName"  class="centerItem club"><span>{{ clubName }}</span></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Left',
  props: {
    profileInfo: {
      type: Object,
      required: true,
      default: () => {},
    }
  },
}
</script>

<style lang="scss" scoped>
.profileWrapper {
  padding-top: 30px;
  .profileImg {
    position:relative;
    overflow: hidden;
    width:100px;
    height:100px;
    border-radius:50%;
    margin: 0 auto;
    .img{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height:100%;
    }
  }
  .centerItem {
    border: 1px solid #c5beba;
    border-radius: 5px;
    margin: 10px 0;
    text-align: center;
  }
  .name {
    font-size: 18px;
    width: 210px;
    height: 48px;
    line-height: 48px;
    border: 1px solid #808080;
  }
  .clubList {
    padding: 0 30px;
    .club {
      font-size: 16px;
      line-height: 30px;
      height: 30px;
      padding: 2px;
    }
  }
}
</style>