<template>
  <ul class="wrapper">
    <AdjustItem
      v-for="eventSchedule in eventSchedules"
      :key="eventSchedule.id"
      :event-schedule="eventSchedule"
      :event-id="eventId"
      @changePostList="$listeners['changePostList']"
    />
  </ul>
</template>

<script>
import AdjustItem from './AdjustItem.vue';

export default {
  name: 'AdjustArea',
  components: {
    AdjustItem,
  },
  props: {
    eventSchedules: {
      type: Array,
      required: true,
    },
    eventId: {
      type: String,
      required: true,
    },
  }
}
</script>

<style lang="scss" scoped>
.wrapper {
  padding: 0 40px;
}
</style>