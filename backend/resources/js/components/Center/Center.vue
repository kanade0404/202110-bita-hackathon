<template>
  <ul class="centerWrapper">
    <ClubCasset v-for="eventData in eventDataList" :key="eventData.event.id" :event-data="eventData" />
  </ul>
</template>

<script>
import ClubCasset from './ClubCasset.vue';

export default {
  name: 'Center',
  components: {
    ClubCasset,
  },
  props: {
    eventDataList: {
      type: Array,
      required: false,
      default: () => [],
    },
  },
}
</script>

<style lang="scss" scoped>
.centerWrapper {
  padding: 0 20px;
}
</style>