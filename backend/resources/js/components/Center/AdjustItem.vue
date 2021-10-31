<template>
  <li class="item">
    <div class="date">
      <div>{{ eventSchedule.date }}　</div>
      <div>{{ eventSchedule.start_time }}〜{{ eventSchedule.end_time }}</div>
    </div>
    <div class="select">
      <div :id="eventSchedule.id" class="selectMark" data-status="Y" @click="clickSelect">○</div>
      <div :id="eventSchedule.id" class="selectMark" data-status="N" @click="clickSelect">△</div>
      <div :id="eventSchedule.id" class="selectMark" data-status="U" @click="clickSelect">×</div>
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
  },
  methods: {
    clickSelect(event) {
      const selectElm = event.target;

      if (selectElm.parentNode.querySelector('.isSelected')) {
        selectElm.parentNode.querySelector('.isSelected').classList.remove('isSelected');
      }

      selectElm.classList.add('isSelected');
    },
  },
}
</script>

<style lang="scss" scoped>
@import '../../../sass/variables';

.item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 10px 0;
  .date {
    display: flex;
    padding-left: 24px;
    font-size: 18px;
  }
  .select {
    display: flex;
    align-items: center;
    .selectMark {
      cursor: pointer;
      font-size: 24px;
      color: #808080;
      margin-left: 16px;
      width: 45px;
      height: 45px;
      line-height: 45px;
      text-align: center;
      border-radius: 50%;
      background: #c3c4c4;
      border: 1px solid #808080;
      box-shadow: 0px 0px 1px 1px #cccccc inset;
      &.isSelected {
        font-size: 30px;
        box-shadow: 0 0 5px $primary;
        border: 1px solid $primary;
        background: #ffffff;
        color: $primary;
      }
    }
  }
}
</style>