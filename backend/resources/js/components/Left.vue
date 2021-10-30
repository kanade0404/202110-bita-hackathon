<template>
  <div>
    <div>
      <div class="profileImg"><img :src="profileInfo.thumbnail_path"></div>
      <div class="centerItem">{{ profileInfo.userName }}</div>
    </div>
    <div>
      <ul>
        <li v-for="clubName in profileInfo.clubNames" :key="clubName"  class="centerItem">{{ clubName }}</li>
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
.profileImg {
  position:relative;
  overflow: hidden;
  width:100px;
  height:100px;
  border-radius:50%;
  .img{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height:100%;
  }
}
.centerItem {
  margin: 0 auto;
}
</style>