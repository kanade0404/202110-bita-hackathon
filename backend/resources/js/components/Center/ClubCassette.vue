<template>
  <li :class="{ isFixedSchedule: isFixedSchedule }" class="clubCassette">
    <div class="cassetteArea">
      <div class="eventTop">
        <div class="clubName">{{ eventData.club.name }}</div>
        <div class="eventName">{{ eventData.event.name }}</div>
      </div>
      <div class="hostProfile">
        <div class="hostImg"><img class="imgItem" :src="eventData.event.create_user.thumbnail_path"></div>
        <div class="hostDetail">
          <div class="hostName">{{  eventData.event.create_user.name}}</div>
          <div class="postDate">{{  eventData.event.create_user.name}}</div>
        </div>
      </div>
      <p class="fixAppealText">
        お疲れ様です！！
        <br>最近、ボドゲ会は平日に行うことが多いですが、たまには休日のまとまった時間でボドゲしましょう！！
        <br>日程の入力をお願いしますm(_ _)m
      </p>
    </div>
    <div class="participateButtonWrapper" v-if="!!isFixedSchedule">
      <button class="participateButton">やっぱり参加できる！</button>
    </div>
    <div v-else class="inputDateArea">
      <div class="accordionButton" @click="toggleAccordion"></div>
      <div :class="{ isExpand: isOpenAccordion }" class="accordionWrapper">
        <div class="accordionContents">
           <div class="accordionInner">アコーディオンするコンテンツ</div>
        </div>
      </div>
    </div>
  </li>
</template>

<script>
export default {
  name: 'clubCassette',
  props: {
    eventData: {
      type: Object,
      required: false,
      default: () => {},
    },
  },
  data() {
    return {
      isOpenAccordion: false,
    }
  },
  computed: {
    isFixedSchedule() {
      return Boolean(this.eventData.fix_event_schedule);
    },
  },
  methods: {
    toggleAccordion() {
      this.isOpenAccordion = !this.isOpenAccordion;
    }
  },
}
</script>

<style lang="scss" scoped>
@import '../../../sass/variables';

.clubCassette {
  margin-bottom: 16px;
  border-radius: 5px;
  background: #ffffff;
  box-shadow: 0 0 5px #808080;
  &.isFixedSchedule {
    border: 1px solid $primary;
    box-shadow: 0 0 5px $primary;
  }
  .cassetteArea {
    padding: 30px 50px 0;
    .eventTop {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      .clubName {
        border: 5px solid $primary;
        color: $primary;
        border-radius: 5px;
        margin-right: 25px;
        padding: 3px 10px;
      }
      .eventName {
        font-size: 18px;
      }
    }
    .hostProfile {
      display: flex;
      align-items: center;
      margin-bottom: 18px;
      .hostImg {
        height: 50px;
        width: 50px;
        margin-right: 10px;
        .imgItem {
          height: 100%;
          border-radius: 50%;
        }
      }
      .hostDetail {
        .hostName {
          font-weight: bold;
          font-size: 16px;
        }
        .postDate {
          color: #808080;
        }
      }
    }
    .fixAppealText {
      font-size: 16px;
      line-height: 1.3;
    }
  }
  .participateButtonWrapper {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    padding: 0 50px 30px;
    .participateButton {
      background-color: $primary;
      color: #ffffff;
      height: 48px;
      width: 300px;
      border-radius: 10px;
      border: none;
      font-weight: bold;
    }
  }
  .inputDateArea {
    margin-top: 20px;
    .accordionButton {
      height: 30px;
      cursor: pointer;
      background: $secondary;
      border-radius: 0 0 5px 5px;
      content: '日程を入力する';
    }
  }
}
/* 外側の枠の高さを設定 */
.accordionWrapper {
  max-height: 0;
  overflow: hidden;
  transition: max-height .3s linear;
  .accordionContents {
    overflow: hidden;
    transform: translateY(-100%);
    transition: transform .3s linear;
    .accordionInner {
      overflow: hidden;
      transform: translateY(100%);
      transition: transform .3s linear;
    }
  }
  &.isExpand {
    max-height: 100%;
    transition: max-height .4s linear;
    .accordionContents {
      transform: translateY(0);
      transition: transform .2s linear;
      .accordionInner {
        transform: translateY(0);
        transition: transform .2s linear;
      }
    }
  }

}
</style>