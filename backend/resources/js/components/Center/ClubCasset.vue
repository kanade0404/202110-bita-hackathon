<template>
  <li class="clubCasset">
    <div class="cassetArea">
      <div class="eventTop">
        <div>{{ eventData.club.name }}</div>
        <div>{{ eventData.event.name }}</div>
      </div>
      <div class="hostProfile">
        <div class="hostImg"><img v-bind:src="eventData.event.create_user.thumbnail_path" width="15" height="15"></div>
        <div class="hostDetail">
          <div class="hostName">{{  eventData.event.create_user.name}}</div>
          <div class="postDate">{{  eventData.event.create_user.name}}</div>
        </div>
      </div>
      <p>
        お疲れ様です！！
        <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
        <br>日程の入力をお願いしますm(_ _)m
      </p>
      <div v-if="!!eventData.fix_event_schedule">
        <button></button>
      </div>
      <div v-else class="inputDateArea">

      </div>
    </div>
    <div class="skalCasset"></div>
  </li>
</template>

<script>
export default {
  name: 'ClubCasset',
  props: {
    eventData: {
      type: Object,
      required: false,
      default: () => {},
    },
  },
}
</script>

<style lang="scss" scoped>
.clubCasset {
  margin-bottom: 16px;
  border-radius: 5px;
  padding: 12px 16px;
  background: #f1f1f1;
  box-shadow: 0 0 5px #808080;
  .cassetArea {
    .eventTop {
      display: flex;
    }
    .hostProfile {
      display: flex;
    }
  }
  .skalCasset {
    height: 50px;
  }
}
</style>