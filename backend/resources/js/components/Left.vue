<template>
  <div class="profileWrapper">
    <div class="serviceLogo"><img class="serviceLogoImg" src="/images/CLUBitA.png"></div>
    <div class="profileDetail">
      <div class="profileImg"><img class="profileImgItem" v-bind:src="profileInfo.thumbnail_path"></div>
      <div class="centerItem name">{{ profileInfo.user_name }}</div>
    </div>
    <div>
      <ul class="clubList">
        <li v-for="clubName in profileInfo.club_name" :key="clubName"  class="centerItem club"><span>{{ clubName }}</span></li>
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
  .serviceLogo {
    margin: 0 auto;
    width: 160px;
    padding-bottom: 20px;
    .serviceLogoImg {
      width: 100%;
    }
  }
  .profileDetail {
    width: 210px;
    margin: 0 auto;
    .profileImg {
      position:relative;
      overflow: hidden;
      width:100px;
      margin: 0 auto;
      .profileImgItem {
        width:100%;
        border-radius:50%;
      }
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
    margin: 0 auto;
    width: 150px;
    .club {
      font-size: 16px;
      line-height: 35px;
      height: 35px;
      padding: 2px;
    }
  }
}
</style>