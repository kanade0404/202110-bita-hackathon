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
  name: 'LeftProfile',
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
.centerItem {
  margin: 0 auto;
}
</style>