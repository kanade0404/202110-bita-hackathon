<template>
  <ul class="centerWrapper">
    <ClubCassette v-for="eventData in eventDataList" :key="eventData.event.id" :event-data="eventData" />
  </ul>
</template>

<script>
import ClubCassette from './ClubCassette.vue';

export default {
  name: 'Center',
  components: {
    ClubCassette,
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
  padding: 0 80px;
}
</style>