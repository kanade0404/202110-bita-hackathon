
<template>
  <ul class="eventList">
    <li
      v-for="eventItem in registeredEventList" :key="eventItem.event_id"
      :class="{ 'is-selected': isSelected(eventItem.event_id) }"
      class="eventItem"
    >
      <p class="itemInfo">{{ eventItem.datetime }}</p>
      <p class="itemInfo">{{ eventItem.event_name }}</p>
    </li>
  </ul>
</template>

<script>
export default {
  name: 'RegisteredEventList',
  props: {
    registeredEventList: {
      type: Array,
      required: true,
    },
    selectedItemId: {
      type: String,
      default: '',
    },
  },
  data() {
    return {
    }
  },
  methods: {
    isSelected(itemId) {
      return itemId === this.selectedItemId;
    },
  },
}
</script>

<style lang="scss" scoped>
@import '../../sass/variables';

.eventList {
  margin: 24px;
}

.eventItem {
  border: 4px solid #e0e0e0;
  border-radius: 6px;
  padding: 6px 8px;
  text-align: center;
  margin: 12px 0 0;

  &:first-child {
    margin: 0;
  }

  &.is-selected {
    border-color: $primary;
    background-color: #ffdbed;
    font-weight: bold;
  }
}

.itemInfo {
  margin: 2px 0 0;

  &:first-child {
    margin: 0;
  }
}
</style>
