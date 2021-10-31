<template>
  <li class="item">
    <div class="date">
      <div>{{ eventSchedule.date }}　</div>
      <div>{{ eventSchedule.start_time }}〜{{ eventSchedule.end_time }}</div>
    </div>
    <div class="select">
      <div>○</div>
      <div>△</div>
      <div>×</div>
    </div>
  </li>
</template>

<script>
export default {
  name: 'AdjustItem',
  props: {
    eventSchedule: {
      type: Object,
      required: true,
    }
  }
}
</script>

<style lang="scss" scoped>
.item {
  display: flex;
  justify-content: space-between;
  margin: 10px 0;
  .date {
    display: flex;
    padding-left: 24px;
    font-size: 18px;
  }
  .select {
    display: flex;
  }
}
</style>